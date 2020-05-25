@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
 

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('img/c11.jpg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('img/c22.jpg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('img/c33.jpg')}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  <br>
  <br>
  <div class="productcalssify">
     <h4 style="text-align: center;">商品分類</h4>
     <hr style="width: 20%;">
     <div class="container">
        <div class="row">
          <div class="col-md">
            <a herf="{{ route('light1') }}">
            <img src= "{{asset('img/type1.jpg')}}" class="type">
            <p class="text1">1</p>
            </a>
          </div>
          <div class="col-md">  
            <img src= "{{asset('img/type2.jpg')}}" class="type2">
            <p class="text2">2</p>
        </div>
          <div class="w-100"></div>
          <div class="col-md">  
            <img src= "{{asset('img/type3.jpg')}}" class="type">
            <p class="text1">3</p>
        </div>
          <div class="col-md">   
            <img src= "{{asset('img/type4.jpg')}}" class="type2">
            <p class="text2">else</p>
            </div>  
        </div>
      </div>
  </div>  


@endsection