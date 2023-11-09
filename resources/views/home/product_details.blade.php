<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
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
   </head>
   <body>
         <!-- header section strats -->
         @include('home.header');
         <!-- end header section -->
       <!-- product details section -->
       <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto;padding:30px">
           <div class="img-box" >
              <img style="width:50%" src="product/{{$product->image}}" alt="">
           </div>
           <div class="detail-box">
              <h5>
               {{$product->title}}
           </h5>

           @if($product->discount_price != null)

            <h6 style="color: red">
                   Discount price
                   <br>
               L.E {{$product->discount_price}}
            </h6>

              <h6 style="text-decoration: line-through;color:blue">
               Price
               <br>
               L.E {{$product->price}}
              </h6>
           @else
              <h6 style="color: blue">
               Price
               <br>
              L.E {{$product->price}}
             </h6>
             @endif
             <h5>Product Description: {{$product->description}}</h5>
             <h5>Product category: {{$product->category}}</h5>
             <h5>available quantity: {{$product->quantity}}</h5>
             <form action="{{url('add_cart',$product->id)}}" method="post">
                @csrf
                <div >
                    <div class="col-md-4">
                     <input type="submit" value="Add to cart" class="option">
                </div>
                    <div class="col-md-4">
                    <input type="number" name="quantity" value="1" min="1" style="width:60px;">
                </div>
                </div>
              </form>           </div>
        </div>
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
