<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAcc extends Model
{
    use HasFactory;
    protected $table = 'cobank_akks';
    public $timestamps = true;

    // protected $casts = [
    //     'totalsalary' => 'float'
    // ];

    protected $fillable = [
        'acctitle',
        'bankname',
        'bankaccno',
        'bankaccountbalance',
        'currencyType',
        'banklocation'
    ];
}
