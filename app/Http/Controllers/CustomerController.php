<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = customer::all();
        return view('customer.list', compact('customers'));

    }
}
