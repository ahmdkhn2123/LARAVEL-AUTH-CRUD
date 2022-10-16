<html>
<head>
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<div class="container mb-3">
    <h1 class="text-center">Update Below</h1>
    <form action="/update/{{$data['id']}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Item Name</label>
                    <input type="text" class="form-control" name="prod_name" value={{ $data['name'] }} >
                </div>

                <div class="mb-3">
                    <label>Item Price</label>
                    <input type="text" class="form-control" name="prod_price" value={{  $data['price']  }}>
                </div>

                <div class="mb-3">
                    <label>Item Category</label>
                    <input type="text" class="form-control" name="prod_category" value={{  $data['category']  }}>
                </div>

                <button type="submit" class="btn btn-success">Update Here</button>
            </form>
</div>

</body>
</html>
