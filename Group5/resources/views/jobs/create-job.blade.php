
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job</title>
</head>

<body>
    <h1>Create a Job</h1>
    <form method="post" action="{{route('job.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Job Title: </label>
            <input type="text" name="job_title" placeholder="Job title" />
        </div>
        <div>
            <label>Description: </label>
            <input type="text" name="description" placeholder="Description" />
        </div>
        <div>
            <label>Salary: $</label>
            <input type="number" name="salary" placeholder="Salary" />
        </div>
        <div>
            <label>Job Type: </label>
            <div>
                <label><input type="radio" name="is_fulltime" value="1"> Full Time</label>
            </div>
            <div>
                <label><input type="radio" name="is_fulltime" value="0"> Part Time</label>
            </div>
        </div>
        <div>
            <input type="submit" value="Add Job"/>
        </div>
    </form>
</body>

</html>