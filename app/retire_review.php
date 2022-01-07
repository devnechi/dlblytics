<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class retire_review extends Model
{
    use HasFactory;
    protected $table = "retire_reviews";

    protected $fillable = [
        
        'comments',
        'imprest_id',
        'imprest_act_id',
        'user_id'
    ];
    public function retire()
    {
        return $this->belongsTo(Imprest_activity::class,'id','imprest_act_id');
    }
}
