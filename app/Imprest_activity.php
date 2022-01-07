<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imprest_activity extends Model
{
    use HasFactory;
    protected $table = "imprest_activities";

    protected $fillable = [
        'status',
        'imp_act_name',
        'imp_type',
        'imprest_id',
        'qty',
        'unit',
        'number',
        'unit_price',
        'total_cost'
    ];
    public function imprest()
    {
        return $this->belongsTo(Imprest::class);
    }
    public function retire()
    {
        return $this->hasOne(Retirement::class,'imp_act_id','id');
    }

}
