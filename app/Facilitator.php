<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facilitator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
