<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Manufacturer;

class ManufacturerController extends Controller
{
    public function index()
    {
        $manufacturer = Manufacturer::all();
        return json_encode(compact('manufacturer'));
    }
}
