<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\EquipmentForm;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = Equipment::all();
        return view('equipment.list', compact('equipments'));
    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(EquipmentForm::class, [
            'method' => 'POST',
            'url' => route('equipment.store')
        ]);
        return view('equipment.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        
        $form = $formBuilder->create(EquipmentForm::class);
        $form->redirectIfNotValid();
        Equipment::create($form->getFieldValues());
        return $this->index();
    }

    public function show($id)
    {
        $customer = Equipment::find($id);
        return view('equipment.detail', compact('equipments'));
    }
}
