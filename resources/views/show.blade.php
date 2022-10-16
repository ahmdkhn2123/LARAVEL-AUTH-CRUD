<html>
<head>
    <title>Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<h1 class="text-center">Details</h1>
<table class="table table-striped  table-bordered border-primary ">
    <tr>
        <th><h3><b>ID</b></h3></th>
        <th><h3><b>Name</b></h3></th>
        <th><h3><b>Pice</b></h3></th>
        <th><h3><b>Category</b></h3></th>
        <th><h3><b>Operations</b></h3></th>


    </tr>
    @foreach($data as $data)
    <tr>
        <th>{{$data['id']}}</th>
        <th>{{$data['name']}}</th>
        <th>{{$data['price']}}</th>
        <th>{{$data['category']}}</th>
        <th><a href="delete/{{$data['id']}}"><button class="btn btn-danger">Delete</button></a>
        <a href="edit/{{$data['id']}}"><button class="btn btn-success">Edit</button></a></th>
    </tr>
    @endforeach


</table>





</body>
</html>
