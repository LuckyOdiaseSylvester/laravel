<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="h-100 w-100 d-flex justify-content-center align-items-center">
    <div class="container ">
        <h2 class="text-center text-danger">Product Details</h2>
        Name <h3>{{ $pdf_order->name }}</h3>
        Title <h3>{{ $pdf_order->title }}</h3>
        Addrees <h3>{{ $pdf_order->address }}</h3>
        Phone Number <h3>{{ $pdf_order->phone }}</h3>
        Email Address <h3>{{ $pdf_order->email }}</h3>
        Product ID <h3>{{ $pdf_order->product_id }}</h3>
        Quantity <h3>{{ $pdf_order->quantity }}</h3>
        Price <h3>NGN {{ $pdf_order->price }}</h3>
        Payment Status <h3>{{ $pdf_order->payment_status }}</h3>
        Date Ordered <h3>{{ $pdf_order->create_at }}</h3>
        Delivery Status: <h3>{{ $pdf_order->delivery_status }}</h3>
        <br>
        <br>
     <img src="product/{{ $pdf_order->image }}" alt="{{ $pdf_order->image }}" height="100px" width="100px">

       {{-- <div>Name:{{ $pdf_order->name }}</div>
       <div>Title:{{ $pdf_order->title }}</div>
       <div>Addrees:{{ $pdf_order->address }}</div>
       <div>Phone Number:{{ $pdf_order->phone }}</div>
       <div>Email Address:{{ $pdf_order->email }}</div>
       <div>Quantity:{{ $pdf_order->quantity }}</div>
       <div>Price:${{ $pdf_order->price }}</div>
       <div>Product ID:{{ $pdf_order->product_id }}</div>
       <div>Payment Status:{{ $pdf_order->payment_status }}</div>
       <div>Date Ordered:{{ $pdf_order->create_at }}</div>
       <div>Delivery Status:{{ $pdf_order->delivery_status }}</div>
        <br>
       <br>
    <img src="product/{{ $pdf_order->image }}" alt="{{ $pdf_order->image }}" height="100px" width="100px"> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>