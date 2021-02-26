<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'users';
    public $timestamps = true;

    protected $casts = [
        'totalsalary' => 'float'
    ];

    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'phonenumber',
        'bankusername',
        'bankname',
        'bankaccnumber',
        'email',
        'dob',
        'gender_id',
        'martialstatus',
        'driving_license',
        'tin_number',
        'address',
        'nationality',
        'password',
        'emegency_contact',
        'Department',
        'pillar_id',
        'role',
        'driving_license',
        'tin_number',
        'job_description',
        'totalsalary',
        'currencyType',
        'working_type',
        'acc_status',
        'added_by'
    ];
}



//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
// user_photo_url
// user_photo_url
// added_by
// user_emp_contact_url
// email
// status_id
// email_verified_at
// remember_token
// created_at
// updated_at
