<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Error;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $jobs = $user->jobs;
        return view('jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('jobs.create-job');
    }

    public function edit(Job $job){
        return view('jobs.edit',['job' => $job]);
    }

    public function update(Job $job, Request $request){
        $data = $request->validate([
            'job_title' => 'required',
            'description' => 'required',
            'salary' => 'required|numeric',
            'is_fulltime' => 'required',
        ]);

        $job->update($data);

        return redirect(route('job.index'))->with('success', $data['job_title'] . ' Updated Successfully.');
    }

    public function delete(Job $job){
        $job->delete();

        return redirect(route('job.index'))->with('success', $job['job_title'] . ' deleted successfully.');
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

        $user = Auth::user();

        $data['employer_id'] = $user->id;

        $new_job = Job::create($data);

        return redirect(route('job.index'))->with('success', $data['job_title'] . ' posted successfully.');
    }
}
