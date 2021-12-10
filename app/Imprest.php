<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imprest extends Model
{
    use HasFactory;

    protected $table = "imprests";

    protected $fillable = [
        'imp_title',
        'requested_by',
        'ref_no',
        'purpose',
        'start_date',
        'end_date',
        'amount_rqst'
    ];
    public function imp_activities()
    {
        return $this->hasMany(Imprest_activity::class,'imprest_id','id');
    }
}
