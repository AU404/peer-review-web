<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Notifications\AssignmentAssigned;

class DashboardController extends Controller
{
    public function index()
    {
        $assignments = Assignment::where('user_id', auth()->id())->with(['user', 'reviews'])->get();
        return view('dashboard', compact('assignments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $assignment = new Assignment();
        $assignment->user_id = auth()->id();
        $assignment->title = $request->title;
        $assignment->description = $request->description;
        $assignment->status = 'pending';

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('assignments', 'public');
            $assignment->file_path = $filePath;
        }

        $assignment->save();

        return redirect()->back()->with('success', 'Tugas berhasil diupload!');
    }

    public function review(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string',
            'score' => 'nullable|integer|min:0|max:100',
        ]);

        $assignment = Assignment::findOrFail($id);
        $assignment->reviews()->create([
            'user_id' => auth()->id(),
            'comment' => $request->comment,
            'score' => $request->score,
        ]);

        $assignment->update(['status' => 'reviewed']);

        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Review berhasil ditambahkan!']);
        }

        return redirect()->back()->with('success', 'Review berhasil disubmit!');
    }

    public function assignReviewer($id)
    {
        $assignment = Assignment::findOrFail($id);
        $otherUsers = User::where('id', '!=', $assignment->user_id)->get();

        if ($otherUsers->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'Tidak ada reviewer lain yang tersedia.'], 400);
        }

        $randomUser = $otherUsers->random();

        try {
            $assignment->assigned_to = $randomUser->id;
            $assignment->save();
            $randomUser->notify(new \App\Notifications\AssignmentAssigned($assignment));
            \Log::info('Notification sent to: ' . $randomUser->id);
            return response()->json(['success' => true, 'message' => 'Reviewer ' . $randomUser->name . ' ditugaskan!']);
        } catch (\Exception $e) {
            \Log::error('Update or Notification failed: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Gagal assign reviewer: ' . $e->getMessage()], 400);
        }
    }
}