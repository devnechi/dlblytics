<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reqiuest extends Model
{

    use HasFactory;

    protected $table = "imprests";

    protected $fillable = [
        'req_title',
        'requested_by',
        'pillar_id',
        'ref_no',
        'purpose',
        'start_date',
        'end_date',
        'current_stage',
        'status',
        'amount_rqst',

    ];

    public function requestedby()
    {
        return $this->hasone(User::class,'user_id','requested_by');
    }
}
