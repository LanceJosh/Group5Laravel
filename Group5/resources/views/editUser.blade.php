<form action="{{ route('users.update', $user->id) }}" method="POST" class="needs-validation" novalidate>
    @csrf
    @method('PUT')

    <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control" required>
            <div class="invalid-feedback">
                Please enter a name.
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control" required>
            <div class="invalid-feedback">
                Please enter a valid email address.
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
