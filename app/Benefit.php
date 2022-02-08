<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Benefit';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'category','unit_amount','assignee'];

    
}
