<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\filename;

class email_control extends Controller
{
    public function result(){
        \Mail::to("bhijaanbasti@gmail.com")->send(new filename());
    }
}
