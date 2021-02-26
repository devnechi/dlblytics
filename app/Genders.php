<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genders extends Model
{
    use HasFactory;


    protected $primaryKey = 'gender_id';
    protected $table = "genders_tbl";

    protected $fillable = [
        'gender_title'
    ];
}
