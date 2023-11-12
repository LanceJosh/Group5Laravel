<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
<style>
@import url(Montserrat.css);
@import url(OpenSans.css);
@import url(Raleway.css);


body {
   background-image: url("images/loginBG.png");
   background-attachment: fixed;
   background-size: cover;
   font-family:  sans-serif;
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
    letter-spacing: 3px;
    line-height: 0.2em;
    font-weight: bold;

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

#loginButton {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
    background-color: #001a33;
    width: 200px;
    height: 35px;
    border-radius: 20px;
    color:aliceblue;
    border: 1px solid #001a33;
}

#loginButton:hover{
   color:#001a33;
   background-color: ghostwhite;
}

#lastPhrase{
    color: dimgray;
    text-decoration: none;
    text-align: center;
    font-size: 12px;
    
}

#sign{
    color: dimgray;
    text-decoration: none;
    text-align: center;
    font-size: 12px;
    text-decoration: underline;
}

#sign:hover{
    color:#004d99;
    cursor: pointer;
}

</style>