<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
<head>
 <title>Hire Lab&Co. | Forgot Password</title>
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
</head>
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        <img src="/images/logo.png" alt="Logo" class="logo" width = "100" height = "100">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Enter your email address and a link will be send towards your email') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mt-4 flex items-center">
           <i class="fa fa-envelope icon"></i>
                <x-label for="email" value="{{ __('Email') }}" class="ml-2" /></div>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
           

            <div class="flex items-center justify-end mt-4">
               <center> <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button><center>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
</html>
<style>
    .ml-4 {
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

.ml-4:hover{
   color:#001a33;
   background-color: ghostwhite;
}
</style>