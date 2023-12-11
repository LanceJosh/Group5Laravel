<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <head>

 <title>Hire Lab&Co. | My Job Listings</title>
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
<style>

    .header{
        top: 40px;
    }
    .tbody{
        background-color: white;

    }
  
     .table-responsive .tbody:hover{
        background-color: #82caff; 
        cursor: pointer;
     }

     .myApplications{
        font-size: 30px;
    color: #004d99;
    letter-spacing: 2px;
    line-height: 0.2em;
    font-weight: bolder;
    font-style: sans-serif;
     }
 #post {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
    background-color: #001a33;
    width: 200px;
    height: 35px;
    border-radius: 20px;
    color:aliceblue;
    border: 1px solid #001a33;
    text-align: center;
    align-content: center;
}

#post:hover{
   color:#001a33;
   background-color: ghostwhite;
}

#edit {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
    background-color: #001a33;
    width: 130px;
    height: 35px;
    border-radius: 20px;
    color:aliceblue;
    border: 1px solid #001a33;
    text-align: center;
    align-content: center;
}

#edit:hover{
   color:#001a33;
   background-color: ghostwhite;
}

#delete {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
    background-color: #ce2029;
    width: 130px;
    height: 35px;
    border-radius: 20px;
    color:aliceblue;
    border: 1px solid #ce2029;
    text-align: center;
    align-content: center;
}

#delete:hover{
   color:#ce2029;
   background-color: ghostwhite;
}

#cancel {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
    background-color: #808080;
    width: 130px;
    height: 35px;
    border-radius: 20px;
    color:aliceblue;
    border: 1px solid #808080;
    text-align: center;
    align-content: center;
}

#cancel:hover{
   color:#808080;
   background-color: ghostwhite;
}
.card-title{
    color:#001a33;
    font-weight: bolder;
    font-style: sans-serif;
    font-size:  30px;
    text-decoration: none;

}

.card-title:hover{
    color: #004d99;
}

.card-text{
    font-weight: light;
    font-style: sans-serif;
    font-size:  20px;
}  

.buttons{
    position: absolute;
}
    </style>
    </head>

<body>
<x-app-layout>
    <br><br>
    <div class="header">
       <center> <h2 class="myApplications">
            {{ __('Employer Job Listings') }}
        </h2> </center>
    </class>

    <br><br>
        <div class="container">
         
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
            @endif
            <a href="{{route('job.create')}}" id ="post" class="btn btn-primary mb-3">Post a Job</a>
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
                        <center>
          <div style="display: flex; gap: 10px; justify-content: center;">
        <a href="{{ route('job.edit', ['job' => $job]) }}" id="edit" class="btn btn-primary mb-3">Edit</a>
        <button type="button" class="btn btn-danger" id="delete" data-toggle="modal" data-target="#deleteModal{{$job->id}}">
                                    Delete
                                </button>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal{{$job->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this job?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" id ="cancel" data-dismiss="modal">Cancel</button>
                                                <form method="post" action="{{ route('job.delete', ['job' => $job]) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" value="Delete" id ="delete" class="btn btn-danger" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
        
                @endforeach
            </div>
        </div>
    </body>

    </html>


    </div>

</x-app-layout>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>