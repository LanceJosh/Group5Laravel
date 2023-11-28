<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All jobs openings') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jobs</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <h1 class="mt-5 mb-3">All job openings</h1>
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
            @endif
            <div>
                <p>Application process requires uploading a PDF format of your resume. Please expect the employer to reach out to you soon.</p>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $job->job_title }}</h5>
                        <p class="card-text">
                            <strong>Description:</strong> {{ $job->description }} <br>
                            <strong>Salary:</strong> ${{ $job->salary }} <br>
                            <strong>Full Time:</strong> {{ $job->is_fulltime ? 'Yes' : 'No' }} <br>
                            <strong>Employer:</strong> {{ $job->employer->name }}
                        </p>
                        <label class="form-label">Upload your resume here: </label>
                        <input type="file" class="form-control">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Submit Application"/>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>


    </div>

</x-app-layout>
