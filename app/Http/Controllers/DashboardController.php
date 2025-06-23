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
        $assignments = Assignment::where('user_id', auth()->id())->get();
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

        return redirect()->back()->with('success', 'Review berhasil disubmit!');
    }

    public function assignReviewer($id)
    {
        $assignment = Assignment::findOrFail($id);
        $otherUsers = User::where('id', '!=', $assignment->user_id)->get();

        if ($otherUsers->isEmpty()) {
            return redirect()->back()->with('error', 'Tidak ada reviewer lain yang tersedia.');
        }

        $randomUser = $otherUsers->random();

        try {
            $assignment->assigned_to = $randomUser->id;
            $assignment->save();
            $notification = $randomUser->notify(new \App\Notifications\AssignmentAssigned($assignment));
            \Log::info('Notification sent to: ' . $randomUser->id . '. Notifiable: ' . json_encode($randomUser->routes) . '. Notification ID: ' . ($notification ? $notification->id : 'null'));
    } catch (\Exception $e) {
            \Log::error('Update or Notification failed: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Gagal assign reviewer: ' . $e->getMessage());
    }

        return redirect()->back()->with('success', 'Reviewer ' . $randomUser->name . ' ditugaskan!');
    }
}