
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <base href="/public">
    <!-- plugins:css -->
    @include('admin.css');
    <style>
        .div_center{
            text-align: center;
            padding-top: 20px;
        }
        .div_font{
            font-size: 40px;
            padding-bottom: 40px;
        }
          .input_color{
            color: black;
          }

          .table-center{
            margin: auto;
            border: 2px solid white;
            width: 50%;
            text-align: center;
          }
          label{
            display: inline-block;
            width: 200px

          }
    </style>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar');
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">


                    <div class="div_center">
                        <h1 class="div_font">Add product</h1>

                        <form action="{{url('update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf <!-- Add this line to include the CSRF token -->


                        <label >product title: </label>
                        <input type="text" name="title" placeholder="write a title" class="input_color" value="{{$product->title}}">
                    </div>

                    <div class="div_center">
                        <label >product Description :</label>
                        <input type="text" name="description" placeholder="write a title" class="input_color" value="{{$product->description}}">
                    </div>

                    <div class="div_center">
                        <label >product Price :</label>
                        <input type="number" name="price" placeholder="write a title" class="input_color" value="{{$product->price}}">
                    </div>

                    <div class="div_center">
                        <label >Discount price :</label>
                        <input type="number" name="discount_price" placeholder="write discount price" class="input_color" value="{{$product->discount_price}}">
                    </div>

                    <div class="div_center">
                        <label >product Quantity :</label>
                        <input type="number" name="quantity" min="0" placeholder="write product quantity" class="input_color" value="{{$product->quantity}}">
                    </div>


                    <div class="div_center">
                        <label >product category :</label>
                            <select class="input_color" name="category" >
                                <option value="{{$product->category}}" selected="">{{$product->category}}</option>
                                @foreach($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                     </div>

                     <div class="div_center">
                        <label >current image </label>
                        <img style="margin: auto"; height="100" width="100" src="/product/{{$product->image}}" alt="">
                    </div>


                    <div class="div_center">
                        <label >product image :</label>
                        <input type="file" name="image"   required="">
                    </div>


                    <div class="div_center">
                        <input type="submit" class="btn btn-success" value="update product">
                    </div>
                </form>

                </div>
            </div>
        <!-- plugins:js -->
    @include('admin.script');

    <!-- End custom js for this page -->
  </body>
</html>
