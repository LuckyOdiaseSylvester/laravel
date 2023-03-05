@extends('layouts.user')
@section('title','add')

<base href="/public">
@section('content')
<div class="container d-flex justify-content-center flex-column align-items-center">
  @include('sweetalert::alert')


  <h1 class="mt-5 mb-5"> {{ 'This product has already been added to your cart' }}</h1> 
<p class="my-5"><a href="{{ route('home') }}" class="btn btn-primary">Back to home</a></p>
</div>
@endsection