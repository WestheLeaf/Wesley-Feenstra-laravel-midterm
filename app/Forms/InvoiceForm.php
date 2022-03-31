<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class InvoiceForm extends Form
{
    public function buildForm()
    {
        // Add fields here...
        $this->
            add('purchase_date', Field::DATE, [
                'rules' => 'required',
                'label' => 'Purchase Date'
            ])
            ->add('customer_id', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'Customer ID'
            ])
            ->add('equipment_id', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'Equipment ID'
            ])
        ->add('submit', 'submit', [
            'lable' => 'submit'
        ]);
    }
}
