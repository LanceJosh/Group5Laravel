<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Application;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Log;
use Illuminate\Support\Facades\File;

class ApplicationController extends Controller
{
    public function apply(Job $job)
    {
        return view('applicant.apply', ['job' => $job]);
    }

    public function my_applications()
    {
        $user = Auth::user();
        $my_applications = $user->my_applications;

        return view('applicant.my-applications', compact('my_applications'));
    }

    public function submit_application(Request $request)
    {
        $data = $request->validate([
            'resume' => 'required|mimes:pdf',
            'job_id' => 'required',
        ], ['resume.required' => 'The PDF document of your resume is required.', 'resume.mimes' => 'accepted file extension: .pdf']);

        $user = Auth::user();
        $jobId = $data['job_id'];

        $data['status'] = 'pending';
        $data['applicant_id'] = $user->id;
        $data['job_id'] = $jobId;

        $resumeFile = $request->file('resume');
        $nameGen = hexdec(uniqid());
        $newFilename = $nameGen . '_' . $resumeFile->getClientOriginalName();
        $up_loc = 'resumes/';
        $resumePath = $up_loc . $newFilename;
        $resumeFile->move($up_loc, $newFilename);
        $data['resume'] = $resumePath;

        Application::insert([
            'applicant_id' => $data['applicant_id'],
            'job_id' => $data['job_id'],
            'status' => $data['status'],
            'resume' => $data['resume'],
            'created_at' => Carbon::now(),
        ]);

        return Redirect(route('applicant.my-applications'))->with('success', 'Application successful');
    }

    public function cancel(Application $application)
    {
        $resumePath = public_path($application->resume);
        $application->delete();
        if (File::exists($resumePath)) {
            File::delete($resumePath);
        }

        return Redirect()->back()->with('success', 'Application to ' . $application->job->job_title . ' has been cancelled.');
    }

    public function accept_application(Application $application)
    {
        $application = Application::find($application->id);

        $application->status = "accepted";
        $application->save();

        return Redirect()->back()->with('success', $application->applicant->name . "'s application has been accepted.");
    }

    public function reject_application(Application $application)
    {
        $application = Application::find($application->id);

        $application->status = "rejected";
        $application->save();

        return Redirect()->back()->with('success', $application->applicant->name . "'s application has been rejected.");
    }
}
