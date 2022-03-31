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
                'label' => 'name'
            ])
            ->add('email', Field::TEXT, [
                'rules' => 'required',
                'label' => 'email'
            ])
            ->add('phone', Field::TEXT, [
                'rules' => 'required',
                'label' => 'phone'
            ])
        ->add('submit', 'submit', [
            'lable' => 'submit'
        ]);
    }
}
