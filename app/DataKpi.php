<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKpi extends Model
{
    public $table = "kpiTable";

    protected $fillable = [
       'creators_id',
       'kpi_title',
        'kpi_desc',
        'dc_timing',
        'fq_of_dc',
        'classification',
        'unit_of_measure'
    ];
}
