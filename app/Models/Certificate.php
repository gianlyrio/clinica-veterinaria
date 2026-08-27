<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Certificate extends Model
{

// fillable => CAMPOS PODE SER PREENCHIDO EM MASSA
protected $fillable = [
        'animal_id',
        'title',
        'issue_date',
        'file_path',
        'notes',
    ];


// CASTS => TRATA O ISSUE_DATE COMO UMA DATA
    protected $casts = [
        'issue_date' => 'date'
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}
