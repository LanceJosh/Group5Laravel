<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a Job</title>
</head>

<body>
    <h1>Edit a Job</h1>
    <form method="post" action="{{route('job.update', ['job' => $job])}}">
        @csrf
        @method('put')
        <div>
            <label>Job Title: </label>
            <input type="text" name="job_title" placeholder="Job title" value="{{$job->job_title}}"/>
        </div>
        <div>
            <label>Description: </label>
            <input type="text" name="description" placeholder="Description" value="{{$job->description}}"/>
        </div>
        <div>
            <label>Salary: $</label>
            <input type="number" name="salary" placeholder="Salary" value="{{$job->salary}}"/>
        </div>
        <div>
            <label>Job Type: </label>
            <div>
                <label><input type="radio" name="is_fulltime" value="1" {{$job->is_fulltime ? "checked" : ''}}> Full Time</label>
            </div>
            <div>
                <label><input type="radio" name="is_fulltime" value="0" {{!$job->is_fulltime ? "checked" : ''}}> Part Time</label>
            </div>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>

</html>