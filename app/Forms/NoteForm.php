<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class NoteForm extends Form
{
    public function buildForm()
    {
        // Add fields here...
        $this
            ->add('equipment_id', Field::NUMBER, [
                'rules' => 'required',
                'label' => 'Equipment ID',
            ])
            ->add('service', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Service'
            ])
            ->add('software', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Software'
            ])
            ->add('content', Field::TEXT, [
                'rules' => 'required',
                'label' => 'Content'
            ])
            ->add('submit', 'submit',[
                'label' => 'Submit'
            ]);
    }
}
