<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Order Details</h1>

     Customer Name: <h3> {{ $order->name }}</h3>
     Customer email:<h3> {{ $order->email }}</h3>
     Customer phone:<h3> {{ $order->phone }}</h3>
     Customer address:<h3> {{ $order->address }}</h3>
     Customer id: <h3> {{ $order->user_id }}</h3>
     Product Name: <h3> {{ $order->product_title }}</h3>
     Product Price: <h3> {{ $order->price }}</h3>
</body>
</html>