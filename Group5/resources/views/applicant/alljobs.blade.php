<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
<head>
 <title>Hire Lab&Co. | All Job Openings</title>
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
 

<x-app-layout>
  

     
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
                        nav {
                            background-color: #013220;
                            color: #fff;
                            text-align: center;
                            padding: 10px 0;
                        }

                        nav ul {
                            list-style-type: none;
                            padding: 0;
                        }

                        nav ul li {
                            display: inline;
                            margin-right: 20px;
                        }

                        nav a {
                            text-decoration: none;
                            color: #fff;
                            font-weight: bold;
                            text-transform: uppercase;
                            transition: color 0.3s;
                        }

                        nav a:hover {
                            color: #ff6f61;
                        }
            div.alljobs-header img {
                width: 4000px;
            }

            div.alljobs-header h2 {
                text-align: center;
                color: #87CEEB;
                font-weight: bold;
                font-size: 50px;
                margin-top: -350px;
                text-transform: uppercase;
            }

            div.alljobs-header h1 {
                text-align: center;
                color: white;
                font-weight: bold;
                font-size: 60px;
                margin-top: 50px;
                margin-bottom: 200px;
            }

            div.container h1 {
                text-align: center;
            }

            div.card-body button {
                border: none;
                transition: 0.5s ease;
            }

            div.card-body button:hover {
                background-color: #00FFFF;
                color: #191970;
                border: none;
            }

            .alljob-subhead {
                margin-top: -200px;
            }

            #edit {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
    background-color: #001a33;
    width: 160px;
    height: 35px;
    border-radius: 20px;
    color:aliceblue;
    border: 1px solid #001a33;
   
}

#edit:hover{
   color:#001a33;
   background-color: ghostwhite;
}

#submit {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
    background-color: #001a33;
    width: 220px;
    height: 35px;
    border-radius: 20px;
    color:aliceblue;
    border: 1px solid #001a33;
   
}

#submit:hover{
   color:#001a33;
   background-color: ghostwhite;
}

.card-title{
    color:#001a33;
    font-weight: bolder;
    font-style: sans-serif;
    font-size:  30px;
    text-decoration: none;

}
.card-text{
    font-weight: light;
    font-style: sans-serif;
    font-size:  20px;
}  

        </style>
    </head>

    <body>
        <div class="alljobs-header">
            <img src="{{ URL::to('/images/image.jpg') }}">
            <h2>Connecting IT Excellence, Powering Future Innovations</h2>
            <h1 class="alljob-subhead">Find what's next:</h1>
        </div>
        <div class="container">
            <h1 class="mt-5 mb-5">All job openings</h1>
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
            @endif
            @error('resume')
            <div class="alert alert-danger">{{ $message }}. Please try again.</div>
            @enderror
            <div>
                @if($jobs->count() > 0)
                @foreach($jobs as $job)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $job->job_title }}</h5>
                        <p class="card-text">
                            <strong>Description:</strong> {{ $job->description }} <br>
                            <strong>Salary:</strong> ${{ $job->salary }} <br>
                            <strong>Full Time:</strong> {{ $job->is_fulltime ? 'Yes' : 'No' }} <br>
                            <strong>Employer:</strong> <a href="{{route('view.user.profile', ['user' => $job->employer->id])}}">{{ $job->employer->name }}</a>
                        </p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" id ="edit" data-toggle="modal" data-target="#exampleModal{{ $job->job_title }}">
                        Apply Now
                        </button>

                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $job->job_title }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $job->job_title }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <p>Application process requires uploading a PDF format of your resume. Please expect the employer to reach out to you soon.</p>
                                    <form method="POST" action="{{route('applicant.submit')}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <strong>Description:</strong> {{ $job->description }} <br>
                                                    <strong>Salary:</strong> ${{ $job->salary }} <br>
                                                    <strong>Full Time:</strong> {{ $job->is_fulltime ? 'Yes' : 'No' }} <br>
                                                    <strong>Employer:</strong> {{ $job->employer->name }}
                                                </p>
                                                <input type="hidden" name="job_id" value="{{ $job->id }}">
                                                <label class="form-label">Upload your resume here: </label>
                                                <input type="file" name="resume" class="form-control" accept="application/pdf">
                                                <br>
                                                <center><input type="submit" id ="submit" class="btn btn-primary" value="Submit Application" /></center>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">No Job Openings</h5>
                        <p class="card-text">There are currently no job openings available. Please check back later.</p>
                    </div>
                </div>
                @endif

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>


    </div>

</x-app-layout>