<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function apply(Job $job){
        return view('applicant.apply',['job' => $job]);
    }
}
