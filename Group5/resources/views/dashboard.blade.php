<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <head>

 <title>Hire Lab&Co. | Admin Dashboard</title>
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
#texts th{
    font-size: 15px;
    color: #004d99;
    font-style: sans-serif;
    text-align: center;
} 
    </style>
</head>


<x-app-layout>
    <br><br>
    <div class="header">
        <center><h2 class="myApplications">
            {{ __('Admin Dashboard') }}
        </h2></center>
</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <center><div class="table-responsive">
                <table class="min-w-full divide-y divide-gray-200 shadow-sm rounded-lg overflow-hidden">
                    <thead class="bg-blue-200">
                        <center><tr id ="texts">
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Role</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Created At</th>
                            <th scope="col" style="margin-left: 80px;" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">Actions</th>
                        </tr><center>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @php
                        $i=1;
                        @endphp

                        @foreach ($users as $user)
                        <tr>
                            <th scope="row" class="px-6 py-4 whitespace-nowrap">{{$i++}}</th>
                            <td class="px-6 py-4 whitespace-nowrap">{{$user->role}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$user->created_at}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <button type="button" class="btn btn-secondary" id="edit" data-toggle="modal" data-target="#editModal{{$user->id}}">
                                            Edit
                                        </button>

                                        <!-- Edit User Modal -->
                                        <div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel">Edit User</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        @include('EditUser') 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                
                                 <button type="button" class="btn btn-danger" id="delete" data-toggle="modal" data-target="#deleteModal{{$user->id}}">
                                        Delete
                                    </button>

                                   
                                    <div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this user?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" id="cancel" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id ="delete" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div></center>
        </div>

    </div>

</x-app-layout>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
