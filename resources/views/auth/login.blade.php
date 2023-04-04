<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Log in</title>
</head>
<body>
    <div class="container">
        <div class="pt-5">
           <div class="card col-md-6 offset-md-3 ">
            <h4 class="text-center">
                Task Management System
            </h4>
           </div>
            <div class="card col-md-6 offset-md-3">
                    <form action="{{route('login')}}" method="POST">
                        <div class="form-group col-md-6 offset-md-3 mt-5">
                            Username<input id="user_name" class="form-control border-bottom" type="text" name="user_name"
                            aria-describedby="error-user-name" placeholder="User Name">
                        </div>
    
                        <div class="form-group col-md-6 offset-md-3 mt-3">
                            Password<input id="password" class="form-control border-bottom" type="password" name="password"
                            placeholder="Password">
                        </div>
                        <div class="form-group col-md-5 offset-md-3 mt-4">
                            <input type="submit" value="Login " class="btn btn-primary ">
                        </div>
                        <div class="form-group col-md-7 offset-md-1 mt-3"></div>
                        
                            @csrf
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first()}}
                        </div>
                    @endif
               
                    
                </div>
                <div class="form-group col-md-7 offset-md-1 mt-3"></div>
            </div>
         </div>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script>
        $('document').ready(function(){
            @if ($errors->any())
            $(".alert").fadeIn(500).delay(3000).fadeOut(500);   
            @endif 
        })
    </script>
</body>
</html>