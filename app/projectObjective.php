<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectObjective extends Model
{
    use HasFactory;


    protected $table = 'new_pillar_project_objective';
    public $timestamps = true;

    protected $guarded = [];
}
