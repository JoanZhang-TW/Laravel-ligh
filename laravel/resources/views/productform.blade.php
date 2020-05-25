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
     <div class="jumbotron">
         <a href="/product" class="btn btn-primary">add image</a>
        <table class="table tabel-stripped table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($product as $product1)
              <tr>
              <th scope="row">{{ $product1->id }}</th>
                <td>{{ $product1->name }}</td>
                <td>{{ $product1->price }}</td>
              <td><img src="{{ asset('uploads/product/'.$product1->image) }}" width="70px" height="70px"></td>
              <td><a href="/editimage/{{ $product1->id }}" class="btn btn-success">Edit</a></td>
              <td><a href="/productdelete/{{ $product1->id }}" class="btn btn-danger">Delete</td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
     </div>
   </div>
   <div style="margin:2% 42%;">{!! $product->render() !!}</div>
</body>
</html>    