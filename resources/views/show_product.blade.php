@extends('layouts.admin')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class=" content-wrapper">

            @if(Session::has('add'))
              <div class="alert alert-success text-center" role="alert">
                {{ Session::get('add') }}
              </div>
              @endif
              @if(Session::has('delete'))
              <div class="alert alert-danger text-center" role="alert">
                {{ Session::get('delete') }}
              </div>
              @endif

              @if(Session::has('edit'))
              <div class="alert alert-success text-center" role="alert">
                {{ Session::get('edit') }}
              </div>
              @endif


            <h1 class="text-center">All Products</h1>
            <div class="table-responsive">

          <table class="table table-bordered ">
            <tr>
              <th>S/N </th>
              <th>Title </th>
              <th> Description  </th>
              <th> Price </th>
              <th>Discount  </th>
              <th> Quantity </th>
              <th> Category </th>
              <th> Image </th>
              <th class="text-center">Action </th>
            </tr>
            <style>
             
            </style>
                              {{-- <img src="{{ asset('images/backend2.png') }}" alt="oppppppppppp"> --}}

            @php
                $i=1;
            @endphp
            @foreach ($products as $product )
                <tr>
                  <td>{{ $i++ }}</td>  
                  <td>{{ $product->title }}</td> 
                  <td style="white-space: pre-wrap; word-wrap: break-word;width:100px">{{ $product->description }}</td>  
                  <td>NGN {{ number_format($product->price) }}</td>  
                  @if($product->discount==null)
                  <td> NULL</td>
                  @else
                  <td>NGN {{ number_format($product->discount) }}</td>
                  @endif
                  <td>{{ $product->quantity }}</td>  
                  <td>{{ $product->category }}</td> 
                  <td class="">
                    <img src="/product/{{ $product->image }}" alt="{{ $product->image }}">
                    {{-- <img src="{{ asset('/storage/images/'.$product->image)}}" class="" alt="{{ $product->image }}" height="100%" width="100%">
                     <img src="{{ asset('assets/storage/images/'.$product->image)}}" class="" alt="{{ $product->image }}" height="100%" width="100%"> 
                    <img src="{{ ('storage/images/'.$product->image)}}" class="" alt="{{ $product->image }}" height="100%" width="100%">
                    <img src="{{ asset('/storage/images/'.$product->image)}}" class="" alt="{{ $product->image }}" height="100%" width="100%">
                    <img src="{{ asset('public/storage/images/'.$product->image)}}" class="" alt="{{ $product->image }}" height="100%" width="100%">
                    <img src="{{ asset('images/'.$product->image)}}" class="" alt="{{ $product->image }}" height="100%" width="100%"> --}}
          
                  </td>
                  <td>
                    <a href="{{ route('edit-product',$product->id) }}" class="btn btn-success mx-2">Edit</a>
                    <a href="{{ route('view',$product->id) }}" class="btn btn-warning mx-2">View</a>
                    <a href="{{ route('delete_pro',$product->id) }}" class="btn btn-danger">Delete</a>

                  </td>
            

                </tr>
            @endforeach


          </table>
        </div>


          </div>
          @endsection