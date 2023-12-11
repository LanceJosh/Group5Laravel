<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
<head>
 <title>Hire Lab&Co. | Create a Job</title>
 <meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Hire Lab&Co." />
    <meta property="og:description" content="Online Job Management / Job Portal" />
    <link rel="shortcut icon" href="images/logo.png">

	
	<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">
<link href="css/Login.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300&display=swap');

    body {
      margin: 0;
      font-family: 'DM Sans', sans-serif;
    }

    .sidebar {
      margin: 0;
      padding: 0;
      width: 300px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }

    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }

    .sidebar a.active {
      background-color: #04AA6D;
      color: white;
    }

    .sidebar a:hover:not(.active) {
      background-color: #4169E1;
      color: white;
    }

    .sidebar img {
      height: 200px;
      width: 200px;
      margin-left: 15%;
    }

    div.content {
      margin-left: 300px;
      padding: 1px 16px;
      height: 1000px;
    }

    div.box {
      background-color: white;
      padding-bottom: 20px;
      width: 1000px;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      position: absolute;
      margin-top: 50px;
      border-radius: 10px;
    }

    div.job-container {
      margin-left: 5%;
    }

    div.job-container h2 {
      color: #0F52BA;
      font-size: 30px;
      font-weight: bold;
    }

    input[type=submit] {
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

    input[type=submit]:hover {
      color: rgb(104, 186, 240);
      background-color: rgb(3, 19, 45);
    }

    div.job-input {
      margin-top: 20px;
    }

    label {
      color: black;
    }

    @media screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }

      .sidebar a {
        float: left;
      }

      div.content {
        margin-left: 0;
      }
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

  <div class="sidebar">
    <img src="{{URL::asset('images/logo.png')}}">
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('job.index') }}">Jobs Management</a>
    <a href="{{ route('aboutus') }}">About Us</a>
    <a href="{{ route('contact') }}">Contact</a>
  </div>

  <div class="content">
    <div class="box">
      <form method="post" action="{{route('job.store')}}">
        @csrf
        @method('post')
        <div class="job-container">
          <h2>Create a Job</h2>
          <div class="job-input">
            <label>Job Title: </label><br>
            <input type="text" name="job_title" class="w3-input" style="width: 250px;" />
            @error('job_title')
            <div class="small text-danger mt-2">{{ $message }}</div>
            @enderror
          </div>
          <div class="job-input">
            <label>Description: </label><br>
            <input type="text" name="description" class="w3-input" style="width: 250px;"></input>
            @error('description')
            <div class="small text-danger mt-2">{{ $message }}</div>
            @enderror
          </div>
          <div class="job-input">
            <label>Salary: $</label><br>
            <input type="number" name="salary" class="w3-input" style="width: 250px;" />
            @error('salary')
            <div class="small text-danger mt-2">{{ $message }}</div>
            @enderror
          </div>
          <div class="job-input">
            <label>Job Type: </label>
            <div>
              <label><input type="radio" name="is_fulltime" value="1"> Full Time</label>
            </div>
            <div>
              <label><input type="radio" name="is_fulltime" value="0"> Part Time</label>
            </div>
            @error('is_fulltime')
            <div class="small text-danger mt-2">{{ $message }}</div>
            @enderror
          </div>
          <div class="button">
            <input type="submit" value="ADD" />
          </div>
        </div>
    </div>
  </div>
  </form>
</body>

</html>