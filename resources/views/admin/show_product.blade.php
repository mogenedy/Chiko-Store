<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css');
    <!-- End layout styles -->
    <style>
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .div_font {
            font-size: 40px;
            padding-bottom: 40px;
            text-align: center
        }

        .input_color {
            color: black;
        }

        .table-center {
            margin: auto;
            border: 2px solid white;
            width: 100%;
            text-align: center;
            max-width: 100%; /* Set the table's maximum width to 100% */
            overflow-x: auto; /* Add horizontal scroll for small screens */
        }

        .image-size {
            width: 150px;
            height: 150px;
        }

        .th-color {
            background: skyblue;
        }

        .th-deg {
            padding: 0 10px; /* Adjust padding for smaller screens */
        }

    /* Responsive CSS for smaller screens */
    @media screen and (max-width: 768px) {
            .table-center {
                font-size: 12px; /* Adjust font size for smaller screens */
            }

            .th-deg {
                padding: 0 5px; /* Adjust padding for smaller screens */
            }

            .image-size {
                width: 80px; /* Adjust image size for smaller screens */
                height: 80px;
            }
        }

        /* Responsive CSS for mobile devices (max-width: 480px) */
        @media screen and (max-width: 480px) {
            .table-center {
                font-size: 10px; /* Adjust font size for mobile screens */
            }

            .th-deg {
                padding: 0 5px; /* Adjust padding for mobile screens */
            }

            .image-size {
                width: 60px; /* Adjust image size for mobile screens */
                height: 60px;
            }
        }

    </style>
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
                {{-- show message after add category --}}
        @if(Session()->has('message'))
        <div class="alert alert-success">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
            {{Session()->get('message')}}
        </div>
        @endif
                <div class="div_font">All Products</div>
                <table class="table-center">
                    <tr class="th-color">
                        <th class="th-deg">title</th>
                        <th class="th-deg">description</th>
                        <th class="th-deg">category</th>
                        <th class="th-deg">quantitiy</th>
                        <th class="th-deg">price</th>
                        <th class="th-deg">discount</th>
                        <th class="th-deg"> image</th>
                        <th class="th-deg"> Delete</th>
                        <th class="th-deg"> Edit</th>
                    </tr>
                  @foreach($product as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                            <img class="image-size" src="/product/{{$product->image}}" alt="">
                        </td>
                        <td ><a class="btn btn-danger"  href="{{url('delete_product',$product->id)}}">Delete</a></td>
                        <td><a  class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- plugins:js -->
    @include('admin.script');

    <!-- End custom js for this page -->
  </body>
</html>
