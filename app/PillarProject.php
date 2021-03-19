<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PillarProject extends Model
{
    use HasFactory;
    protected $primaryKey = 'project_id';
    protected $table = "pillar_projects";

    protected $fillable = [
        'project_title',
        'created_by',
        'pillar_ref_id',
        'project_desc',
        'project_objectives',
        'ref_kpi',
        'project_expected_outcomes',
        'total_project_cost',
        'current_stage'
    ];
}
