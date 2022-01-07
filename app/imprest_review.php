<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imprest_review extends Model
{
    use HasFactory;
    protected $table = "imprest_reviews";

    protected $fillable = [
        'comments',
        'imprest_id',
        'user_id'
    ];
    public function retire()
    {
        return $this->belongsTo(Imprest::class,'id','imprest_id');
    }
}
