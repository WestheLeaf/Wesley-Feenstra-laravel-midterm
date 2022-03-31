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
                'label' => 'name'
            ])
            ->add('price', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'Price'
            ])
            ->add('RAM', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'RAM'
            ])
            ->add('GPU', Field::TEXT, [
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
