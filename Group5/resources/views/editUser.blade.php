
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

#update {
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
    right: 150px;
    
}

#update:hover{
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
    background-color: white;
    width: 400px;
    height: 270px;
}

.w3-input{
    width: 200px;
}
</style>


<center><div class ="form">
    <br>
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
            <button type="submit" id="update" class="btn btn-primary">Update</button>
        </div>
    </div>

</form></div></center>


