<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $manufacturers = Note::all();
        return view('note.list', compact('notes'));
    }
}
