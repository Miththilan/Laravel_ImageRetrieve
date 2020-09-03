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
        <form action="/updateimage/{{$employees->id}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('PUT')}}

        <input type="hidden" name="id" id="id" value="{{$employees->id}}" >

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" value="{{$employees->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{$employees->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Post</label>
            <input type="text" name="post" value="{{$employees->post}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <label>Image</label>
        <div class="form-group">
            <input type="file" name="image" value="{{$employees->image}}" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary" href="/view" >Save Data</button>
        </form>
</div>
    </div>

</body> 