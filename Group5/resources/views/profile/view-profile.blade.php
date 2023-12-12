<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>

<body>
    <x-app-layout>
    <div class="card mx-auto" style="max-width: 18rem;">
        <img src="{{ asset($user->profile_photo_path) }}" class="card-img-top" alt="{{ $user->name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text">{{ $user->role }}</p>
            <p class="card-text">{{ $user->email }}</p>
            <p class="card-text">Account created {{ $user->created_at->diffForHumans() }}</p>
        </div>
    </div>
    </x-app-layout>

</body>

</html>