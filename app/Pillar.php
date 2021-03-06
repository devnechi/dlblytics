<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pillar extends Model
{
    use Notifiable;

    use HasFactory;
    protected $primaryKey = 'pillar_id';
    protected $table = "dlab_pillars";

    protected $fillable = [
        'pillar_title',
        'pillar_desc',
        'pillar_status',
    ];
}
