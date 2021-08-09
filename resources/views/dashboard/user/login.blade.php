<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="row justify content-center mt-5">
            <div class="col-md-4 offset-md-4">
                <h5>User login</h5>

                <hr>

                @if (Session::get('fail'))
                    <div class="alert alert-danger"> {{ Session::get('fail') }} </div>
                @endif

                <form action="{{route('user.check')}}" method="POST">@csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email address" value="{{old('email')}}">
                        <p class="text-danger">@error('email'){{ $message }}@enderror</p>
                    </div>
    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" value="{{old('password')}}">
                        <p class="text-danger">@error('password'){{ $message }}@enderror</p>
                    </div>
    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                    <br>

                    <a href="{{route('user.register')}}">Create new account</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>