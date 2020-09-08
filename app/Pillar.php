<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pillar extends Model
{

    protected $fillable = [
        'pillar_title',
        'pillar_desc',
        'pillar_status',
        'creators_id'
    ];
}
