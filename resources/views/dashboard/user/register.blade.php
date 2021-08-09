<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Register</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>User regsiter</h5>

                <hr>

                @if (Session::get('success'))
                    <div class="alert alert-success"> {{ Session::get('success') }} </div>
                @endif

                @if (Session::get('fail'))
                    <div class="alert alert-danger"> {{ Session::get('fail') }} </div>
                @endif

                <form action="{{route('user.create')}}" method="post">@csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter full name" value="{{old('name')}}">
                        <p class="text-danger">@error('name'){{$message}}@enderror</p>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email address" value="{{old('email')}}">
                        <p class="text-danger">@error('email'){{$message}}@enderror</p>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password" value="{{old('password')}}">
                        <p class="text-danger">@error('password'){{$message}}@enderror</p>
                    </div>

                    <div class="form-group">
                        <label for="cpassword">Confirm password</label>
                        <input type="password" name="cpassword" class="form-control" placeholder="Confirm password" value="{{old('cpassword')}}">
                        <p class="text-danger">@error('cpassword'){{$message}}@enderror</p>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>

                    <br>

                    <a href="{{route('user.login')}}">Already have an account</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>