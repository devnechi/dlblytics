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
        'ref_no',
        'purpose',
        'start_date',
        'end_date',
        'amount_rqst'
    ];
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
        return $this->belongsTo(PillarActivities::class,'pillar_activities_pillar_act_id','pillar_act_id');
    }
}
