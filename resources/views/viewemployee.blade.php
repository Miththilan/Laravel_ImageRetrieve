<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="jumbotron">
        <a href="/employee" class="btn btn-primary">Add Image</a><br>
        <table class="table table-stripped table-bordered ">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Post</th>
                    <th scope="col">Image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($employees as $row)
                    <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->post}}</td>
                    <td><img src="{{asset('uploads/employee/' . $row->image) }}" width="100px;" height="100px;" alt="Image" /></td>
                    <td><a href="/editimage/{{$row->id}}" class="btn btn-success">EDIT</a></td>
                    <td><a href="/deleteimage/{{$row->id}}" class="btn btn-danger">DELETE</a></td>
                    </tr>
                @endforeach
                
                </tbody>
        </table>    
        </div>
    </div>
</body>
</html>