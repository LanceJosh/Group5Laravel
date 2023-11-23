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
    <link rel="stylesheet" type="text/css" href="{{ asset('style-create-job.css') }}">
    <title>Create Job</title>
</head>

<body>
    <form method="post" action="{{route('job.store')}}">
        @csrf
        @method('post')
        <div class="background">
            <img src="{{URL::asset('images/image.jpg')}}" width="1500px">
            <div class="job-container">
                <h2>Create a  Job</h2>
                <div class="job-input">
                    <label>Job Title: </label>
                    <input type="text" name="job_title" placeholder="Job title" />
                </div>
                <div class="job-input">
                    <label>Description: </label>
                    <input type="text" name="description" placeholder="Description" />
                </div>
                <div class="job-input">
                    <label>Salary: $</label>
                    <input type="number" name="salary" placeholder="Salary" />
                </div>
                <div class="job-input">
                    <label>Job Type: </label>
                    <div>
                        <label><input type="radio" name="is_fulltime" value="1"> Full Time</label>
                    </div>
                    <div>
                        <label><input type="radio" name="is_fulltime" value="0"> Part Time</label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="ADD JOB"/>
                </div>
            </div>
        </div>
    </form>
    
</body>

</html>
</x-app-layout>