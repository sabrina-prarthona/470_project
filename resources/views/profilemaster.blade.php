<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Covid care project</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        
    </head>
    <body>
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/profile">Dashboard</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @php($id =Session::get('user'))
                @php($name =Session::get('name'))
                @php($phone =Session::get('phone'))
                @php($age =Session::get('age'))
                
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" >{{$name}}<span class="sr-only"></span></a>
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
</div>
        @yield('content') 

    </body>
</html>