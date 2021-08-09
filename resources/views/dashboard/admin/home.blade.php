<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN Dashboard</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="mb-5">Welcome, {{ strtoupper(Auth::guard('admin')->user()->name) }} </h5>

                        <h6 class="text-muted">your details</h6>

                        <table class="table table-sm table-hover table-striped">
                            <tr>
                                <td>Name</td>
                                <td> {{ Auth::guard('admin')->user()->name; }} </td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td> {{ Auth::guard('admin')->user()->phone; }} </td>
                            </tr>
                            <tr>
                                <td>Email address</td>
                                <td> {{ Auth::guard('admin')->user()->email; }} </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <a href=" {{ route('admin.logout') }} " onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>

                                    <form action=" {{ route('admin.logout') }} " method="POST" class="d-none" id="logout-form">@csrf</form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>