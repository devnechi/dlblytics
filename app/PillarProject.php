<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PillarProject extends Model
{
    use HasFactory;
    protected $primaryKey = 'project_id';
    protected $table = "pillar_projects";

    protected $casts = [
        'project_funders' => 'array',
        'project_partiners' => 'array',
    ];


    protected $fillable = [
        'project_title',
        'project_lead_id',
        'created_by',
        'pillar_ref_id',
        'project_desc',
        'review_status',
        'project_objectives',
        'project_expected_outcomes',
        'total_project_cost',
        'current_stage',
        'start_date',
        'end_date',
        'project_funders',
        'project_partiners',
    ];
    public function pObjs()
    {
        return $this->hasMany(projectObjective::class,'project_id','project_id');
    }

    public function ProjectFile()
    {
        return $this->hasMany(DocProjectFile::class,'project_id','project_id');
    }
}
