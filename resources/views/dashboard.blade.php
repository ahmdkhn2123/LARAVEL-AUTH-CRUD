<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Hello {{ session::get('userid')['email']}}</h1>
    <a href="logout" class="btn btn-danger" style="float: right;">logout</a>

    <h2 class="text-center">Enter Item Here</h2>
        <div class="col-md-4" style="margin:auto">
        @if(session::has('success'))
        <div class="alert alert-success">{{session::get('success')}}</div>
        @endif

        @if(session::has('fail'))
        <div class="alert alert-danger">{{session::get('fail')}}</div>
        @endif
            <form action="add" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Item Name</label>
                    <input type="text" class="form-control" name="prod_name" >
                </div>

                <div class="mb-3">
                    <label>Item Price</label>
                    <input type="text" class="form-control" name="prod_price" >
                </div>

                <div class="mb-3">
                    <label>Item Category</label>
                    <input type="text" class="form-control" name="prod_category" >
                </div>

                <button type="submit" class="btn btn-success">Add Here</button>
                <a href="show" class="btn btn-primary">Show</a>

            </form>
        </div>


</body>
</html>
