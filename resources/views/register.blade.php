<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Here</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center">Register Below</h2>
    <div class="col-md-4 text" style="margin:auto">
    @if ($errors->any())
    @foreach ($errors->all() as $err )
    <li>{{$err}}</li>
    @endforeach
    @endif
        <form action="register" method="POST">
            @csrf
            @if (Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif

            @if (Session::has('fail'))
            <div class="alert alert-success">{{Session::get('fail')}}</div>
            @endif
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Register Here</button>

            <a href="login">Already A User ??</a>
        </form>

    </div>
</body>
</html>
