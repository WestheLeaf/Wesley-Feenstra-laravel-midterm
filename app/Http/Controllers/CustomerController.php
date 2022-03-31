<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Kris\App\LaravelFormBuilder\FormBuilder;
use App\Forms\CustomerForm;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.list', compact('customers'));

    }

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(CustomerForm::class, [
            'method' => 'POST',
            'url' => route('customers.store')
        ]);
        return view('customers.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        
        $form = $formBuilder->create(CustomerForm::class);
        $form->redirectIfNotValid();
        Customers::create($form->getFieldValues());
        return $this->index();
    }
}
