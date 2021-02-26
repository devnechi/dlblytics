<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class PStaffRoles extends Model
{
    use HasFactory;
    protected $primaryKey = 'role_id';
    protected $table = "pillar_staff_role_tbl";

    protected $fillable = [
        'role_title',
        'role_desc'
    ];
}
