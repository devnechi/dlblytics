<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'users';
    public $timestamps = true;

    protected $casts = [
        'salary' => 'float'
    ];

    protected $fillable = [
        'name',
        'description',
        'salary',
        'created_at'
    ];
}
