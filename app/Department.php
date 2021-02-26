<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Department extends Model
{

    use HasFactory;
    protected $primaryKey = 'dept_id';
    protected $table = "dlab_departments";

    protected $fillable = [
        'dept_title',
        'dept_description'
    ];
}
