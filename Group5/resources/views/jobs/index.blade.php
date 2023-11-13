<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
</head>
<body>
    <h1>Jobs</h1>
    <div>
        @foreach($jobs as $job)
            <p>{{ $job->job_title }} - {{ $job->description }} - Salary: ${{ $job->salary }} - Job Type: {{ $job->is_fulltime ? 'Full Time' : 'Part Time' }} - Posted: {{$job->created_at->diffForHumans()}}</p>
        @endforeach
    </div>
</body>
</html>
