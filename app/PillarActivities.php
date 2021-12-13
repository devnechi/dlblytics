<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PillarActivities extends Model
{
    use HasFactory;
    protected $primaryKey = 'pillar_act_id';
    protected $table = "pillar_activities";
    protected $casts = [
        'pinvolved' => 'array',
        'act_objectives' => 'array'
    ];
    protected $fillable = [
        'act_title',
        'created_by',
        'act_desc',
        'act_objectives',
        'total_act_cost',
        'current_stage',
        'start_date',
        'end_date',
        'country',
        'venue',
        'pinvolved'
    ];
}


