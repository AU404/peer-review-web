<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assignment;

class BerandaController extends Controller
{
    public function index()
    {
        $assignments = Assignment::latest()->get(); 
        return view('beranda', compact('assignments'));
    }
}