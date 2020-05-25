@extends('frontend.layouts.master')

@section('title', 'productdetail')

@section('content')
 

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-5">
          <img src="{{ asset('uploads/product/'.$product->image) }}" width="320px" height="320px" id="bigproduct">
        <div id="productthumbnail">
          <br>
          <div class="row">
            <div class="col-md-2" class="thumbs">
              <img src="{{ asset('uploads/product/'.$product->image) }}" width="50px" height="50px">
            </div> 
            <div class="col-md-2" class="thumbs">
              <img src="{{ asset('uploads/product/'.$product->image) }}" width="50px" height="50px">
            </div> 
            <div class="col-md-2" class="thumbs">
              <img src="{{ asset('uploads/product/'.$product->image) }}" width="50px" height="50px">
            </div> 
            <div class="col-md-2" class="thumbs">
              <img src="{{ asset('uploads/product/'.$product->image) }}" width="50px" height="50px">
            </div> 
          </div>  
        </div>    
        </div>
        <div class="col-md-6">
          <h3>{{$product->name}}</h3>
          <br>
          <div>
            <h5>產品簡介</h5>
            <hr>
            {{$product->pdetail}}
          </div>
          <br>
            <p>價格:&nbsp;&nbsp;${{$product->price}}</p>
            <button type="button" class="btn btn-danger">加入購物車</button>
            <button type="button" class="btn btn-warning">直接購買</button>
        </div>
      </div>
</div>



<script>
      $('.thumbs').click(function(){
        $('#bigproduct').attr('src', $('.thumbs').src );
      })
</script>
@endsection