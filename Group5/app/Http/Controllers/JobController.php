<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Error;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('jobs.create-job');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'job_title' => 'required',
            'description' => 'required',
            'salary' => 'required|numeric',
            'is_fulltime' => 'required',
        ]);

        $data['is_fulltime'] = boolval($data['is_fulltime']);

        $new_job = Job::create($data);

        return redirect(route('job.index'));
    }
}
