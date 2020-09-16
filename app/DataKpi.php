<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKpi extends Model
{
    public $table = "kpiTable";

    protected $fillable = [
       'creators_id',
       'kpi_title',
       'ref_pillar_id',
        'kpi_desc',
        'dc_timing',
        'fq_of_dc',
        'classification',
        'unit_of_measure',
        'method_of_dc',
        'dissaggregate',
        'formula',
        'reporting_respns',
        'target_value',
        'tolerance_band',
        'last_approved'
    ];


    // 'dc_timing',
    // 'fq_of_dc',
    // 'classification',
    // 'unit_of_measure'
}
