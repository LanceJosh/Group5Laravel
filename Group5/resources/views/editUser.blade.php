<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <head>

 <title>Hire Lab&Co. | Edit User</title>
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
label{
    font-size: 15px;
    color: #004d99;
    font-style: sans-serif;
    text-align: center;
} 

.form{
    align-content: center;
    background-color: whitesmoke;
    width: 500px;
    height: 250px;
}
</style>
</head>
<x-app-layout>
    <br><br>
    <div name="header">
        <center><h2 class="myApplications">
            {{ __('Edit User') }}</center>
        </h2>
</div>
<br><br>
<center><div class ="form">
    <br><br>
<form action="{{ route('users.update', $user->id) }}" method="POST" class="needs-validation" novalidate>
    @csrf
    @method('PUT')
   
    <div class="form-group row" style="margin-bottom: 20px;">
    <label for="role" class="col-sm-2 col-form-label" style="font-weight: bold;">{{ __('Role') }}</label>
    <div class="col-sm-10">
        <select id="w3-input" class="form-control" style="border-radius: 5px;" name="role" required autofocus>
            <option value="" selected disabled>{{ __('Please select a role') }}</option>
            <option value="admin">{{ __('Admin') }}</option>
            <option value="employer">{{ __('Employer') }}</option>
            <option value="applicant">{{ __('Applicant') }}</option>
        </select>
        <div class="invalid-feedback">
            Please select a role.
        </div>
    </div>
</div>


    <div class="form-group row" style="margin-bottom: 20px;">
        <label for="name" class="col-sm-2 col-form-label" style="font-weight: bold;">Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" id="w3-input" value="{{ $user->name }}" class="form-control" required style="border-radius: 5px;">
            <div class="invalid-feedback">
                Please enter a name.
            </div>
        </div>
    </div>

    <div class="form-group row" style="margin-bottom: 20px;">
        <label for="email" class="col-sm-2 col-form-label" style="font-weight: bold;">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" id="w3-input" value="{{ $user->email }}" class="form-control" required style="border-radius: 5px;">
            <div class="invalid-feedback">
                Please enter a valid email address.
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <center><button type="submit" id="edit" class="btn btn-primary">Update</button></center>
        </div>
    </div>

</form></div></center>

</x-app-layout>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</html>
