@extends('layouts.user')
@section('title','product details')

<base href="/public">
@section('content')
<div class="container d-flex justify-content-center mb-2">
    <div class="card" style="width: 18rem;">

      <img src="/product/{{ $products->image }}" alt="{{ $products->image }}">
      <div class="card-body">
            @if($products->discount==!null)
          <div class="card-text"><Span class=" h5 pr-2">Title:</Span>{{ $products->title }}</div>
          <div class="card-text"><span class="h5 pr-2">Category:</span>{{ $products->category }}</div>
          <div class="card-text"><span class="h5 pr-2">Description:</span>{{ $products->description }}</div>
          <div class="card-text text-primary"><span class="h5 pr-2">Price:</span style="text-decoration: line-through">${{ $products->price }}</div>
          <div class="card-text text-danger"><span class="h5  pr-2">Discount Price:</span ><span 
             >NGN {{number_format( $products->discount) }}</span></div>
            @else
            <h5 class="card-title"><Span class="pr-2">Title:</Span>{{ $products->title }}</h5>
          <div class="card-text"><span class="h5 pr-2">Category:</span>{{ $products->category }}</div>
          <div class="card-text"><span class="h5 pr-2">Description:</span>{{ $products->description }}</div>
          <div class="card-text text-primary"><span class="h5 pr-2">Price:</span>NGN {{number_format( $products->price) }}</div>
      
            @endif
          </div>
      </div>

</div>
<div class="but container d-flex justify-content-center mb-2">
  <a href="{{ route('home') }}" class="btn btn-primary">Back to home</a>

</div>

@endsection