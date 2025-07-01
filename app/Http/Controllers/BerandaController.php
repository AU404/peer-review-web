<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;

class BerandaController extends Controller
{
    public function index()
    {
        $assignments = Assignment::with('user')->latest()->get(); 
        return view('beranda', compact('assignments'));
    }

    public function show($id)
    {
        $assignment = Assignment::with(['user', 'comments.user'])->findOrFail($id);
        return response()->json([
            'title' => $assignment->title,
            'description' => $assignment->description,
            'file_path' => $assignment->file_path,
            'file_url' => $assignment->file_path ? Storage::url($assignment->file_path) : null,
            'comments' => $assignment->comments->map(function ($comment) {
                return ['user_name' => $comment->user->name, 'comment' => $comment->comment];
            }),
        ]);
    }

    public function comment(Request $request, $id)
    {
        $request->validate(['comment' => 'required|string|max:500']);
        $assignment = Assignment::findOrFail($id);
        $assignment->comments()->create(['user_id' => auth()->id(), 'comment' => $request->comment]);
        return response()->json(['success' => true]);
    }
}