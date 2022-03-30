<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return json_encode(compact('invoices'));
    }
}
