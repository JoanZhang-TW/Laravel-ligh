@extends('frontend.layouts.master')

@section('title', 'light1')

@section('content')
 

<br>
<br>
<div class="container">
  <div class="row">
    @foreach ($product as $key => $product1)
    <div class="col-sm-3">
      <a href="/productdetail/{{ $product1->id }}">
      <img src="{{ asset('uploads/product/'.$product1->image) }}" width="200px" height="200px">
      <p class="productofname">{{ $product1->name }}</p>
      </a>
    </div>
    @endforeach
  </div>
</div>

@endsection