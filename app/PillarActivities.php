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
        'pinvolved',
        'pillar_ref_id'
    ];
    public function subactivities()
    {
        return $this->hasMany(PillarSubActivities::class,'activity_ref_id','pillar_act_id');
    }
    public function imprests()
    {
        return $this->hasMany(Imprest::class,'pillar_activities_pillar_act_id','pillar_act_id');
    }
}


