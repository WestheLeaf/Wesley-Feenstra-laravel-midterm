<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\NoteForm;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('note.list', compact('notes'));
    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(NoteForm::class, [
            'method' => 'POST',
            'url' => route('note.store')
        ]);
        return view('note.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        
        $form = $formBuilder->create(NoteForm::class);
        $form->redirectIfNotValid();
        Note::create($form->getFieldValues());
        return $this->index();
    }

    public function show($id)
    {
        $note = Note::find($id);
        return view('note.detail', compact('note'));
    }
}
