<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectkpiReferences extends Model
{
    use HasFactory;

    protected $table = 'project_kpi_references';
    public $timestamps = true;

    protected $guarded = [];
}
