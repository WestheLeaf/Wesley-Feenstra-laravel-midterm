<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['equipment_id', 'service', 'software', 'content'];

    public function equipments()
    {
        return $this->belongsTo(Equipment::class);
    }
}
