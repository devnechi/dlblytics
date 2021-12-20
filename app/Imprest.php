<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imprest extends Model
{
    use HasFactory;

    protected $table = "imprests";

    protected $fillable = [
        'imp_title',
        'requested_by',
        'pillar_id',
        'ref_no',
        'purpose',
        'start_date',
        'end_date',
        'current_stage',
        'status',
        'amount_rqst',
        'pillar_activities_pillar_act_id'
    ];

    public function requestedby()
    {
        return $this->hasone(User::class,'user_id','requested_by');
    }
    public function imp_activities()
    {
        return $this->hasMany(Imprest_activity::class,'imprest_id','id');
    }
    public function project()
    {
        return $this->belongsTo(PillarProject::class,'pillar_project_project_id','project_id');
    }

    public function activity()
    {
        return $this->belongsTo(PillarActivities::class,'pillar_act_id','pillar_activities_pillar_act_id');
    }
}
