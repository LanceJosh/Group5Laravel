<head>
    <style>
        .myApplications {
            font-size: 30px;
            color: #004d99;
            letter-spacing: 2px;
            line-height: 0.2em;
            font-weight: bolder;
            font-style: sans-serif;
            margin-top: 5%;
        }

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
    </style>
</head>

<x-app-layout>
    <div class="header">
        <center>
            <h2 class="myApplications">
                My Profile
            </h2>
        </center>
    </div>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-6">
                <h2 class="text-lg font-semibold leading-6 text-gray-900">Profile Picture</h2>
                <div class="mt-4 flex items-center">
                    <img id="profilePreview" class="h-24 w-24 rounded-full object-cover" src="{{ asset(auth()->user()->profile_photo_path) }}" alt="{{ auth()->user()->name }}">
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="ml-4" id="profileForm">
                        @csrf
                        @method('PUT')

                        <input type="file" name="profile_photo" accept="image/*" class="hidden" id="profile_photo" onchange="updateImagePreview(this); document.getElementById('profileForm').submit();">

                        <label for="profile_photo" class="ml-2 p-2 bg-gray-200 hover:bg-gray-300 rounded-md cursor-pointer">
                            Change
                        </label>

                        <button type="submit" class="ml-4 p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">
                            Save
                        </button>
                    </form>
                </div>
            </div>


            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            @livewire('profile.update-profile-information-form')

            <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mt-10 sm:mt-0">
                @livewire('profile.update-password-form')
            </div>

            <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <div class="mt-10 sm:mt-0">
                @livewire('profile.two-factor-authentication-form')
            </div>

            <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <x-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
            @endif
        </div>
    </div>
    <script>
                function updateImagePreview(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            document.getElementById('profilePreview').src = e.target.result;
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
</x-app-layout>