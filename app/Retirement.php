<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retirement extends Model
{
    use HasFactory;
    protected $fillable = [

        'imp_act_id',
        'amount_used',
        'receipt_path',
        'balance',
        'described'
    ];
}
