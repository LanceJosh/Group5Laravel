<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color: #4a5568;">
            {{ __('Edit User') }}
        </h2>
    </x-slot>
<form action="{{ route('users.update', $user->id) }}" method="POST" class="needs-validation" novalidate style="background-color: #f8fafc; padding: 20px; border-radius: 10px;">
    @csrf
    @method('PUT')

    <div class="form-group row" style="margin-bottom: 20px;">
    <label for="role" class="col-sm-2 col-form-label" style="font-weight: bold;">{{ __('Role') }}</label>
    <div class="col-sm-10">
        <select id="role" class="form-control" style="border-radius: 5px;" name="role" required autofocus>
            <option value="">{{ __('Select Role') }}</option>
            <option value="admin">{{ __('Admin') }}</option>
            <option value="user">{{ __('User') }}</option>
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
            <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control" required style="border-radius: 5px;">
            <div class="invalid-feedback">
                Please enter a name.
            </div>
        </div>
    </div>

    <div class="form-group row" style="margin-bottom: 20px;">
        <label for="email" class="col-sm-2 col-form-label" style="font-weight: bold;">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control" required style="border-radius: 5px;">
            <div class="invalid-feedback">
                Please enter a valid email address.
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary" style="border-radius: 5px;">Update</button>
        </div>
    </div>
</form>

</x-app-layout>
