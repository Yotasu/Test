<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Menentukan kolom yang bisa diisi secara mass-assignment
    protected $fillable = [
        'name',
        'email',
        'hire_date',
        'position',
    ];
}
