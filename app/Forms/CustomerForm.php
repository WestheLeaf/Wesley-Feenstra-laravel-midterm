<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class CustomerForm extends Form
{
    public function buildForm()
    {
        // Add fields here...
        $this->
            add('name', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Name'
            ])
            ->add('email', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Email'
            ])
            ->add('phone', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Phone'
            ])
        ->add('submit', 'submit', [
            'lable' => 'submit'
        ]);
    }
}
