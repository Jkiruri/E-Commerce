<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .title_deg{
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 40px;
        }
        .table_deg{
            border: 2px solid white;
            width: 90%;
            margin: auto;
            padding-top: 50px;
            text-align: center;
            font-size: 25px;
        }
        .th_deg{
            background-color: skyblue;
        }
        .img_size{
            width: 200px;
            height: 200px;
        }
    </style>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="title_deg">All Orders</h1>

                <table class="table_deg">
                    <tr class="th_deg">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Price</th>
                        <th>Product_title</th>
                        <th>Image</th>
                        <th>Print PDF</th>
                        
                    </tr>
                    @foreach ($order as $order )
                        
                    
                    <tr >
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->email}}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->price }}</td>
                        <td>{{ $order->product_title }}</td>
                        <td>
                            <img class = "img_size"src="/product/{{$order->quantity}}">
                        </td>
                        <td>
                        <a href="{{ url('print_pdf', $order->id) }}" class="btn btn-secondary">Print PDF</a>
                        </td>
                         </tr>
                    @endforeach
                </table>
            </div>
        </div>       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>