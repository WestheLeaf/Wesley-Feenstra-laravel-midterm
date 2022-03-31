<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class EquipmentForm extends Form
{
    public function buildForm()
    {
        // Add fields here...
        $this->
            add('name', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Name'
            ])
            ->add('price', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Price'
            ])
            ->add('ram', Field::TEXT, [
                'rules' => 'required',
                'label' => 'RAM'
            ])
            ->add('gpu', Field::TEXT, [
                'rules' => 'required',
                'label' => 'GPU'
            ])
            ->add('category', Field::SELECT, [
                'rules' => 'required',
                'label' => 'Category',
                'choices' => ['desktop' => "Desktop", 'laptop' => "Laptop", 'tablet' => 'Tablet'],
                'empty_value' => '=== Select Category ==='
            ])
            ->add('manufacturer_id', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'Manufactuer ID'
            ])
        ->add('submit', 'submit', [
            'lable' => 'submit'
        ]);
    }
}
