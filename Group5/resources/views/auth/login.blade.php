<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    

 <title>Hire Lab&Co. | Login</title>
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
<div class="body">
<x-guest-layout class="mh-4">
    <x-authentication-card style="background-image: url(images/loginBG.png); background-size: cover; background-position: center;">
        <x-slot name="logo">
        <img src="/images/logo.png" alt="Logo" class="logo" width = "100" height = "100">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <br>
           <center> <h2 id = "mainLabel"> Login </h2> </center>
            <br>
 <div class="flex items-center">
    <i class="fa fa-envelope icon"></i>
    <x-label for="email" value="{{ __('Email') }}" class="ml-2"></x-label></div>
    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />

<br>
<div class="mt-4 flex items-center">
    <i class="fa fa-lock icon"></i>
    <x-label for="password" value="{{ __('Password') }}" class="ml-2"/></div>
    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password"/>
    <div class="flex items-center justify-between">
    <div class="block mt-4">
        <label for="remember_me" class="flex items-center">
            <x-checkbox id="remember_me" name="remember" />
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
    </div>
</div>

 
           <br><br>     
           <div class="mt-4 mx-auto text-center"> <!-- Add mx-auto and text-center for horizontal and text centering -->
       
           
    <x-button class="ml-4">
        {{ __('Log in') }}
    </x-button>
    <br><br>
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/register-view">
                {{ __('Do not have an account yet? Click Here.') }}
            </a>
 
    </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
</div>
<style>

.mh-4{
    background-color: black; 
    background-size: cover; 
    background-position: center;
}

.form{
align-content: center;
width: 450px;
height: 500px;
background-color: ghostwhite;
align-content: center;
margin-top: 70px;
}

.container{
    width: 400px;
    height: 400px;
    background-color: ghostwhite;
    align-content: center;
    
}

.container:hover{
    transform: scale(1.1);
}

#mainLabel {
    font-size: 30px;
    color: #004d99;
    letter-spacing: 2px;
    line-height: 0.2em;
    font-weight: bolder;
    font-style: sans-serif;

}

#unameLabel {
    font-size: 15px;
    color: #001a33;
    letter-spacing: 1px;
    font-weight: bold;
    text-align: left;
    margin-left: 30px;
}

#email #password{
    justify-content: center;
    width: 400px;
    height: 35px;
    color: darkgrey;
    background-color: ghostwhite;
    border-right: none;
    border-top: none;
    border-left: none;
    border-bottom: 1px solid #d1d1e0;
   
   
}

#email:hover{
    border-bottom: 1px solid #004d99;
    cursor: pointer;
}

#password:hover{
    border-bottom: 1px solid #004d99;
    cursor: pointer;
}

i {
    color: #001a33;
    height: 20px;
}

.flexElement{
    display: flex;
    margin-left: 70px;
}

#forgotPass {
    color: #1a8cff;
    text-decoration: none;
    text-align: right;
    font-size: 12px;
    margin-left: 100px;
  
    
}

#forgotPass:hover {
    color: #001a33;
    cursor: pointer;
}

#rememberMe {
    -webkit-appearance: checkbox;
    -moz-appearance: checkbox;
    appearance: checkbox;
    display: inline-block;
    width: auto;
}

#remember{
    color: #1a8cff;
    font-size: 12px;
    
}

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

#lastPhrase{
    color: dimgray;
    text-decoration: none;
    text-align: center;
    font-size: 12px;
    
}

x-button{
    color: dimgray;
    text-decoration: none;
    text-align: center;
    font-size: 12px;
    text-decoration: underline;
}

x-button:hover{
    color:#004d99;
    cursor: pointer;
}

</style>
</html>