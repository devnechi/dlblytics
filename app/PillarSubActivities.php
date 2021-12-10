<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PillarSubActivities extends Model
{
    use HasFactory;

    protected $table = "pillar_subactivities";
    protected $casts = [
       
        'subact_objectives' => 'array',
        'pinvolved' => 'array',
    ];

    protected $fillable = [
        'subact_title',
        'review_status',
        'current_stage',
        'created_by',
        'activity_ref_id',
        'subact_desc',
        'total_subactivity_cost',
        'start_date',
        'subact_objectives',
        'pinvolved',
        'end_date',       
        'country',
        'region',
        'venue'
    ];
}


