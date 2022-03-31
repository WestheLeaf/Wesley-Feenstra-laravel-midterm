<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\ManufacturerForm;

class ManufacturerController extends Controller
{
    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('manufacturer.list', compact('manufacturers'));
    }
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(ManufacturerForm::class, [
            'method' => 'POST',
            'url' => route('manufacturer.store')
        ]);
        return view('manufacturer.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        
        $form = $formBuilder->create(ManufacturerForm::class);
        $form->redirectIfNotValid();
        Manufacturer::create($form->getFieldValues());
        return $this->index();
    }
}
