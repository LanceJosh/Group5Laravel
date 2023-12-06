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

class ApplicationController extends Controller
{
    public function apply(Job $job)
    {
        return view('applicant.apply', ['job' => $job]);
    }

    public function my_applications(){
        $user = Auth::user();
        $my_applications = $user->my_applications;

        return view('applicant.my-applications', compact('my_applications'));
    }

    public function submit_application(Request $request)
    {
        try {
            $data = $request->validate([
                'resume' => 'required|mimes:pdf',
                'job_id' => 'required', // Make sure 'job_id' is required
            ]);

            $user = Auth::user();
            $jobId = $data['job_id']; // Retrieve 'job_id' from the validated data

            $data['status'] = 'pending';
            $data['applicant_id'] = $user->id;
            $data['job_id'] = $jobId;

            // Get the uploaded file
            $resumeFile = $request->file('resume');

            // Generate a unique identifier (hexcode)
            $nameGen = hexdec(uniqid());

            // Build the new filename with the unique identifier
            $newFilename = $nameGen . '_' . $resumeFile->getClientOriginalName();

            // Store the uploaded PDF with the new filename in the public/resumes directory
            $up_loc = 'resumes/';
            $resumePath = $up_loc . $newFilename;

            $resumeFile->move($up_loc, $newFilename);

            // Save the file path to the 'resume' column
            $data['resume'] = $resumePath;

            // Insert the application into the database
            Application::insert([
                'applicant_id' => $data['applicant_id'],
                'job_id' => $data['job_id'],
                'status' => $data['status'],
                'resume' => $data['resume'],
                'created_at' => now(), // You can use now() for the current timestamp
            ]);

            return Redirect()->back()->with('success', 'Application successful');
        } catch (\Exception $e) {
            // Log the exception for debugging

            // Return a response indicating the error, or redirect back with an error message
            return Redirect()->back()->with('error', 'An error occurred while submitting the application.');
        }
    }
}
