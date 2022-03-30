<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Equipment;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipment = Equipment::all();
        return view('Equipment.list', compact('equipments'));
    }
}
