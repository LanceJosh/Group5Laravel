<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-6">
                <h2 class="text-lg font-semibold leading-6 text-gray-900">Profile Picture</h2>
                <div class="mt-4 flex items-center">
                    <img id="profilePreview" class="h-24 w-24 rounded-full object-cover" src="{{ asset(auth()->user()->profile_photo_path) }}" alt="{{ auth()->user()->name }}">
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="ml-4">
                        @csrf
                        @method('PUT')

                        <input type="file" name="profile_photo" accept="image/*" class="hidden" id="profile_photo" onchange="previewProfilePicture(this);">
                        
                        <!-- Change button using basic HTML with larger padding -->
                        <button type="button" class="ml-2 p-2 bg-gray-200 hover:bg-gray-300 rounded-md cursor-pointer" onclick="document.getElementById('profile_photo').click();">
                            Change
                        </button>

                        <!-- Save button using basic HTML with larger padding -->
                        <button type="submit" class="ml-4 p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">
                            Save
                        </button>
                    </form>
                </div>
            </div>
            <!-- End Profile Picture Update Form -->

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
</x-app-layout>