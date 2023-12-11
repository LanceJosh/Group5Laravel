<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <head>

 <title>Hire Lab&Co. | My Pending Applicants</title>
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
.tbody{
        background-color: white;

    }
  
     .table-responsive .tbody:hover{
        background-color: #82caff; 
        cursor: pointer;
     } 
   
   
   </style>
    </head>


<x-app-layout>
    <br><br>
    <div class="header">
        <center><h2 class="myApplications">
            Applications for {{$job->job_title}}
        </h2></center>
</div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Applications for {{$job->job_title}}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                @if($applications->count() > 0)
                <div class="table-responsive">
                    <table class="min-w-full divide-y divide-gray-200 shadow-sm rounded-lg overflow-hidden">
                        <thead class="bg-blue-200">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Count</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Application ID</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Submitted At</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Submitted By</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Resume</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            @php
                            $i=1;
                            @endphp
                            @foreach ($applications as $application)
                            @php
                            $resume_filename = substr($application->resume, strpos($application->resume,'_')+1);
                            @endphp
                            <tr>
                                <th scope="row" class="px-6 py-4 whitespace-nowrap">{{$i++}}</th>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->status}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->created_at->diffForHumans()}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$application->applicant->name}}</td>
                                <td class="px-6 py-4 whitespace-nowrap"><a href="{{ url($application->resume) }}" target="_blank">{{$resume_filename}}</a></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($application->status === "pending")
                                    <div class="flex">
                                   
                                    <button type="button" class="btn btn-success mr-2 accept-modal-btn" id ="accept" data-toggle="modal" data-target="#acceptModal{{$application->id}}">
                                        Accept
                                    </button>

                                  
                                    <button type="button" class="btn btn-danger mr-2 reject-modal-btn" id ="reject" data-toggle="modal" data-target="#rejectModal{{$application->id}}">
                                        Reject
                                    </button>

                                   
                                    <div class="modal fade" id="acceptModal{{$application->id}}" tabindex="-1" role="dialog" aria-labelledby="acceptModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="acceptModalLabel">Accept Application</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to accept this application?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">Cancel</button>
                                                    <form method="POST" action="{{ route('application.accept', ['application' => $application]) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" id ="accept" class="btn btn-success">Accept</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Reject Modal -->
                                    <div class="modal fade" id="rejectModal{{$application->id}}" tabindex="-1" role="dialog" aria-labelledby="rejectModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="rejectModalLabel">Reject Application</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to reject this application?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" id="cancel" data-dismiss="modal">Cancel</button>
                                                    <form method="POST" action="{{ route('application.reject', ['application' => $application]) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" id="reject" class="btn btn-danger">Reject</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @else
                                    <p>{{$application->status === "accepted" ? "Contact the applicant for the job interview. Good luck!" : "Application rejected. Be patient and you'll find the right candidate."}}</p>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">No active applications yet.</h5>
                                    <p class="card-text">There are currently no applications for this job opening.</p>
                                </div>
                            </div>
                            @endif
                        </tbody>
                    </table>
                </div>
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