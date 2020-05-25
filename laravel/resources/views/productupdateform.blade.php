<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <form action="/updateimage/{{$product->id}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
    <input type="hidden" name="id" id="id" value="{{$product->id}}">
         <div class="form-group">
             <label>Name</label>
             <input type="text" name="name" class="form-control" value="{{$product->name}}" placeholder="Enter Name">
         </div> 
         
         <div class="form-group">
            <label>Price</label>
            <input type="text"  name="price" class="form-control" value="{{$product->price}}" placeholder="Enter Price">
        </div> 

        <div class="input-group">
            <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" value="{{$product->image}}">
            <label class="custom-file-label">Choose file</label>
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary"> Update data</button>
    </div>
</body>
</html>
