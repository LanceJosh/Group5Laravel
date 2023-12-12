<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Edit a Job</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300&display=swap');
body {
  margin: 0;
  font-family: 'DM Sans', sans-serif;
}



div.content {
  margin-left: 300px;
  padding: 1px 16px;
  height: 1000px;
}
div.box{
    background-color: white;
    padding-bottom: 20px;
    width: 1000px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    position: absolute;
    margin-top: 50px;
    border-radius: 10px;
}
div.job-container{
    margin-left: 5%;
}
div.job-container h2{
    color: #0F52BA;
    font-size: 30px;
    font-weight: bold;
}
input[type=submit]{
    font-weight: bold;
    color: rgb(3, 19, 45);
    background-color: rgb(104, 186, 240);
    height: 35px;
    width: 150px;
    text-align: center;
    margin-top: 30px;
    margin-left: 80%;
    padding-top: 5px;
    border-radius: 20px;
    transition: 0.5s ease;
    cursor: pointer;
    border-color: transparent;
}
input[type=submit]:hover{
    color: rgb(104, 186, 240);
    background-color: rgb(3, 19, 45);
}
div.job-input{
    margin-top: 20px;
}
    label{
        color: black;
    }
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>

<body>


<div class="content">
    <div class="box">
        <form method="post" action="{{route('job.update', ['job' => $job])}}">
            @csrf
            @method('put')
                <div class="job-container">
                    <h2>Edit a Job</h2>
                        <div class="job-input">
                            <label>Job Title: </label><br>
                                <input type="text" name="job_title" class="w3-input" style="width: 250px;" value="{{$job->job_title}}"/>
                        </div>
                    <div class="job-input">
                        <label>Description: </label><br>
                        <input type="text" name="description" class="w3-input" style="width: 250px;" value="{{$job->description}}"/>
                    </div>
                    <div class="job-input">
                        <label>Salary: $</label><br>
                        <input type="number" name="salary" class="w3-input" style="width: 250px;" value="{{$job->salary}}"/>
                    </div>
                    <div class="job-input">
                        <label>Job Type: </label>
                        <div>
                            <label><input type="radio" name="is_fulltime" value="1" {{$job->is_fulltime ? "checked" : ''}}> Full Time</label>
                        </div>
                        <div>
                            <label><input type="radio" name="is_fulltime" value="0" {{!$job->is_fulltime ? "checked" : ''}}> Part Time</label>
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="UPDATE" />
                    </div>
                </div>
    </div>
</div>
    </form>
</body>

</html>