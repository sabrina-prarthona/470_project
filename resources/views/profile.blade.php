<!DOCTYPE html>

<html>
    <head>
    
    <title>Covid care project</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        
    </head>

    <body>
        
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Dashboard</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @php($id =Session::get('user'))
                @php($name =Session::get('name'))
                @php($phone =Session::get('phone'))
                @php($age =Session::get('age'))
                
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">{{$name}}<span class="sr-only"></span></a>
                    </li>
                        
                    <li class="nav-item">
                        <a class="nav-link" href="/edit/{{$id}}">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/covidstatus/{{$id}}">Update status</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link " href="/logout">Log Out</a>
                    </li>
                    
                    </ul>
                </div>
            </nav>

            <h1 style="text-align:center; margin:50px;" >User Profile</h1>

            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Age</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">{{$id}}</th>
                    <td>{{$name}}</td>
                    <td>{{$phone}}</td>
                    <td>{{$age}}</td>
                    </tr>
                    
                    
                </tbody>
            </table>


        </div>
    </body>

</html> 
