<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PManagerRoles extends Model
{
    use HasFactory;

    protected $primaryKey = 'role_id';
    protected $table = "pillar_manager_role_tbl";

    protected $fillable = [
        'role_title',
        'role_desc'
    ];
}
