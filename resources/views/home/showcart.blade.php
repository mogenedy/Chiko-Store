<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;800&display=swap" rel="stylesheet">
    <style>
        .cart_center{
            width: 50%;
            margin: auto;
            text-align:center;
            padding: 30px
        }
        table, th, td{
            border: 1px solid black;
        }
        .th_deg{
            font-size: 20px;
            background-color: skyblue;
            padding: 5px;
        }
    .img-deg{
        height: 200px;
    width: 200px    }

    .total_deg{
        font-size: 25px;
        width: 70;
        margin: auto;
        text-align: center;
        font-family:'Tajawal', sans-serif;
    }


    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header');
        <!-- end header section -->
        {{-- show message after add category --}}
        @if (Session()->has('message'))
        <div class="alert alert-success">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
            {{ Session()->get('message') }}
        </div>
       @endif
    <div class="cart_center">
        <table>
            <tr>
                <th class="th_deg">product title</th>
                <th class="th_deg">product quantity</th>
                <th class="th_deg">price</th>
                <th class="th_deg">image</th>
                <th class="th_deg">action</th>
            </tr>

            <?php
            $totaPrice = 0;
            ?>
@foreach ($cart as $cart)
            <tr>
            <td>{{$cart->product_title}}</td>
              <td>{{$cart->quantity}}</td>
              <td>L.E{{$cart->price}}</td>
              <td><img class="img-deg" src="/product/{{$cart->image}}" alt=""></td>
              <td><a class="btn btn-danger" href="{{url('remove_cart',$cart->id)}}">Remove</a></td>
            </tr>
            <?php
            $totaPrice += $cart->price;
            ?>
@endforeach
        </table>
{{-- Display total price --}}
        <h1 class="btn btn-success">Total price : L.E{{$totaPrice}}</h1>

    </div>
    <div class="total_deg">
        <h1 >Proceed to Order</h1>


        <a href="{{url('cash_order')}}" class="btn btn-danger">Cash on delivery</a>
        <a href="" class="btn btn-danger">Pay using visa</a>
    </div>






    <!-- footer start -->
    @include('home.footer');
    <!-- footer end -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

        </p>
    </div>
    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html>
