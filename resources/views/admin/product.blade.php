<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .div_center{
            padding-top: 40px;
            text-align: center;
            
        }
        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color{
            color: black;
            padding-bottom: 20px;

        }
        label{
            display: inline-block;
            width: 200px;

        }
        .div_design{
            padding-bottom: 15px;
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
                @if (session()->has('message'))

                 <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                 </div>

                @endif

                <div class="div_center">

                    <h1 class="font_size">Add Product</h1>

                    <form action="{{ url('/add_product')}}" method="POST" enctype="multipart/form-data">

                        @csrf
                    <div class="div_design">
                    <label for="title">Product Title:</label>
                    <input type="text" class = "text_color" id = "title" name="title" placeholder="Write a Title" required>
                    
                    </div>

                    <div class="div_design">
                        <label for="title">Product Description:</label>
                        <input type="text" class = "text_color" id = "title" name="description" placeholder="Description" required>
                        
                    </div>

                    <div class="div_design">
                        <label for="title">Product Price:</label>
                        <input type="number" min = "0" class = "text_color" id = "title" name="price" placeholder="Write a Price" required>
                            
                    </div>
                    <div class="div_design">
                        <label for="title">Discounted Price:</label>
                        <input type="number" class = "text_color" id = "title" name="dis_price" placeholder="Type a Discount" >
                            
                    </div>
                    <div class="div_design">
                        <label for="title">Product Quantity:</label>
                        <input type="number" class = "text_color" id = "title" name="quantity" placeholder="Write a Quantity" required>
                            
                    </div>
                    
                    <div class="div_design">
                        <label for="title">Product Category:</label>
                        
                        <select class="text_color" name="category" required> 
                            <option value="" selected = "">Add Category Here</option>

                            @foreach ($category as $category)
                                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                            @endforeach
                            
                        </select>
                            
                    </div>
                    <div class="div_design">
                        <label for="product_image" required>Product Image Here</label>
                        <input type="file" name = "image">
                    </div>
                    <div class="div_design">
                        <input type="submit" value="Add Product" class="btn btn-primary">
                    </div>

                </form>

                </div>
            </div>
        </div>    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html> 