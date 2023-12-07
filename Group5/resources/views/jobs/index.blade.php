<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employer Job Listings') }}
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
            <h1 class="mt-5 mb-3">My Jobs</h1>
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
            @endif
            <a href="{{route('job.create')}}" class="btn btn-primary mb-3">Post a Job</a>
            <div>
                @foreach($jobs as $job)
                <div class="card mb-3">
                    <div class="card-body">
                        <a href="{{route('job.applicants', ['job' => $job])}}" class="card-title">{{ $job->job_title }}</a>
                        <p class="card-text">
                            <strong>Description:</strong> {{ $job->description }} <br>
                            <strong>Salary:</strong> ${{ $job->salary }} <br>
                            <strong>Full Time:</strong> {{ $job->is_fulltime ? 'Yes' : 'No' }} <br>
                            <strong>Employer:</strong> {{ $job->employer->name }}
                        </p>
                        <a href="{{route('job.edit', ['job' => $job])}}" class="btn btn-warning">Edit</a>
                        <form method="post" action="{{route('job.delete', ['job' => $job])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger" />
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </body>

    </html>


    </div>

</x-app-layout>
