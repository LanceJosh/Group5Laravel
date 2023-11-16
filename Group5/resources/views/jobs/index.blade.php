<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
</head>

<body>
    <h1>My Jobs</h1>
    <div>
        @if(session()->has('success'))
        <h6>{{session('success')}}</h6>
        @endif
    </div>
    <div>
        @foreach($jobs as $job)
        <p>
            <strong>Job Title:</strong> {{ $job->job_title }} <br>
            <strong>Description:</strong> {{ $job->description }} <br>
            <strong>Salary:</strong> ${{ $job->salary }} <br>
            <strong>Full Time:</strong> {{ $job->is_fulltime ? 'Yes' : 'No' }} <br>
            <strong>Employer:</strong> {{ $job->employer->name }}
            <a href="{{route('job.edit', ['job' => $job])}}">Edit</a>
        <form method="post" action="{{route('job.delete', ['job' => $job])}}">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" />
        </form>
        </p>
        @endforeach
    </div>
</body>

</html>