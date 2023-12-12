<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <head>

 <title>Hire Lab&Co. | My Applications</title>
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

     .accept-modal-btn,
        .reject-modal-btn {
            cursor: pointer;
            text-decoration: underline;
            color: blue;
        }

        #accept {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
    background-color: #03c04a;
    width: 130px;
    height: 35px;
    border-radius: 20px;
    color:aliceblue;
    border: 1px solid #03c049;
    text-align: center;
    align-content: center;
}

#accept:hover{
   color:#03c049;
   background-color: ghostwhite;
}



#reject {
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

#reject:hover{
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
    
    </style>
</head>

<x-app-layout>
<br><br>
    <div class="header">
       <center> <h2 class="myApplications">
            {{ __('My Applications') }}
        </h2></center>
    </div>

    <body>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                @if($my_applications->count() > 0)
                <center><div class="table-responsive">
                    <table class="min-w-full divide-y divide-gray-200 shadow-sm rounded-lg overflow-hidden">
                        <thead class="bg-blue-200">
                            <center><tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Count</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Submission ID</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Job title</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Submitted At</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Resume</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Actions</th>
                            </tr></center>
                        </thead>
                        <tbody class="tbody">
                            @php
                            $i=1;
                            @endphp
                            @foreach ($my_applications as $application)
                            @php
                            $resume_filename = substr($application->resume, strpos($application->resume,'_')+1);
                            @endphp
                            <tr>
                                <th scope="row" class="px-6 py-4 whitespace-nowrap">{{$i++}}</th>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->job->job_title}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->status}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->created_at->diffForHumans()}}</td>
                                <td class="px-6 py-4 whitespace-nowrap"><a href="{{ url($application->resume) }}" target="_blank">{{$resume_filename}}</a></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($application->status === 'pending')
                                <button type="button" class="btn btn-danger" id="reject" data-toggle="modal" data-target="#cancelModal{{$application->id}}">
                                    Cancel </button>
                                    @else
                                    <p>Congrats on your new job.</p>
                                    <p>Wait for your employer for further instructions.</p>
                                    @endif
                                </td>
                            </tr>
                            <div class="modal fade" id="cancelModal{{$application->id}}" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel{{$application->id}}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="cancelModalLabel{{$application->id}}">Confirm Cancellation</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to cancel this application?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancel">Close</button>
                                                <form method="post" action="{{route('applicant.cancel', ['application' => $application])}}">
                                                    @csrf
                                                    @method('delete')
                                                    <input type="submit" value="Cancel" id="reject" class="btn btn-danger" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @else
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">No active applications yet.</h5>
                                    <p class="card-text">There are currently no applications. Please apply to one of the job openings.</p>
                                </div>
                            </div>
                            @endif
                        </tbody>
                    </table>
                </div><center>
            </div>

        </div>
    </body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>

</x-app-layout>