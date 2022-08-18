@extends('master')
@section("content")
<div class="container">
    <form action="signup" method="POST" class="row g-3">
        <div class="col-md-6">
            @csrf
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">NID</label>
            <input type="text" name="nid" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="inputPassword4">
        </div>
        
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Phone Number</label>
            <input type="text" name="contact_number" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Gender</label>
            <select id="inputState" name="gender" class="form-select">
            <option selected>Choose</option>
            <option>Male</option>
            <option>Female</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Age</label>
            <input type="text" name="age" class="form-control" id="inputZip">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Occupation</label>
            <input type="text" name="occupation" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputCity" class="form-label">Vaccination Date</label>
            <input type="text" name="vaccination_date" class="form-control" id="inputCity">
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">Vaccination status</label>
            <select id="inputState" name="vaccination_status" class="form-select">
            <option selected>Choose</option>
            <option>Done</option>
            <option>Not Now</option>
            </select>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Description</label>
            <input type="text" name="vescription" class="form-control" id="inputAddress" placeholder="Details problem">
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </div>
        
    </form>
</div>
@endsection