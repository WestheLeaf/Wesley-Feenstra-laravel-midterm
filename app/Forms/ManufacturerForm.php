<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class ManufacturerForm extends Form
{
    public function buildForm()
    {
        // Add fields here...
        $this->
            add('name', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Name'
            ])
            ->add('sales_phone', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Sales Phone'
            ])
            ->add('tech_phone', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Tech Phone'
            ])
        ->add('submit', 'submit', [
            'lable' => 'submit'
        ]);
    }
}
