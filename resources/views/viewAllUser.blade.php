<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Covid care project</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/adminProfile">profile</a>
        
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/alluser">All User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Update Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/adminlogout">log Out</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    
    <div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
            <tr>
            <th scope="row">{{$member['id']}}</th>
                <td>{{$member['name']}}</td>
                <td>{{$member['email']}}</td>
                <td>{{$member['age']}}</td>
                
                <td>
                    <a href="{{ url('/patientdata/'.$member['id'] )}}" class="btn btn-primary">view</a>
                    <a href="{{ url('/deletedata/'.$member['id'] )}}" class="btn btn-danger">delete</a>
                    <a href="{{ url('/coviddata/'.$member['id'] )}}" class="btn btn-warning">Patient Status</a>
                </td>
            
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>

    </body>
</html>