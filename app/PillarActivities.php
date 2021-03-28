<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PillarActivities extends Model
{
    use HasFactory;
    protected $primaryKey = 'pillar_act_id';
    protected $table = "pillar_activities";

    protected $fillable = [
        'act_title',
        'created_by',
        'project_ref_id',
        'act_desc',
        'act_objectives',
        'ref_kpi',
        'act_expected_outcomes',
        'total_activity_cost',
        'current_stage'
    ];
}

}
