@extends('layouts.user')
@section('title','orders')
@section('content')
@include('sweetalert::alert')

@if($customer==0)
<div class="alert alert-danger" role="alert">
  <h1 class="text-center">{{ 'No order yet'  }}</h1>  
</div>
@else

<div class="container ">
    @if(Session::has('cancel'))
        <div class="alert alert-danger text-center" role="alert">
            {{ Session::get('cancel') }}
        </div>
        @endif
    <div class="table-responsive">


<table class="table table-bordered ">
 <thead>
    @php
       $i=1;
    @endphp
   <tr>
     <th scope="col">S/n</th>
     <th scope="col">Title</th>
     <th scope="col">Price</th>
     <th scope="col">Quantity</th>
     <th scope="col">Image</th>
     <th scope="col" class="text-center">Action</th>


   </tr>
 </thead>
 <tbody>
    @foreach ($customer_orders as $customer_order )
       
   <tr>
     <th scope="row">{{ $i++ }}</th>
     <td>{{ $customer_order->title }}</td>
     <td>NGN {{number_format($customer_order->price) }}</td>
     <td>{{ number_format($customer_order->quantity) }}</td>

     <td><img  src="/product/{{ $customer_order->image }}"  class="h-10 w-50 " alt="{{ $customer_order->image }}" 
       height="50%" width="50%" style="height: 50px; width:50px">
     </td>
     <td class="text-center">
        @if($customer_order->delivery_status=='Processing')
        <div  href="{{ route('del',$customer_order->id) }}" class="btn btn-warning mb-4 my-md-4">Pending</div>
        @elseif($customer_order->delivery_status=='Delivered')
        <div href="{{ route('del',$customer_order->id) }}" class="btn btn-success mb-4 my-md-4">Delivered</div>
        @elseif($customer_order->delivery_status=='Rejected')
        <div href="{{ route('del',$customer_order->id) }}" class="btn btn-danger mb-4 my-md-4">Rejected</div>
        @else
        <div href="{{ route('del',$customer_order->id) }}" class="btn btn-primary mb-4 my-md-4">Shipping</div>
        @endif
        @if($customer_order->delivery_status=='Delivered'||$customer_order->delivery_status=='Rejected')
        @else
        <a href="{{ route('cancel',$customer_order->id) }}" class="btn btn-danger mb-4 my-md-4">Cancel</a>
        @endif

    </td>
   </tr>
   @endforeach

 </tbody>
</table>
</div>
@endif

@endsection