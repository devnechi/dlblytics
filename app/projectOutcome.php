<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectOutcome extends Model
{
    use HasFactory;

    protected $table = 'new_pillar_project_outcome';
    public $timestamps = true;

    protected $guarded = [];
}
