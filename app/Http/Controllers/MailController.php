<?php

namespace App\Http\Controllers;
use App\Mail\ProjectCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendMail()
    {
         Mail::to("semperjack@gmail.com")->send(new ProjectCreated());
    }
}
