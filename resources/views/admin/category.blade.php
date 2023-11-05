<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    @include('admin.css');
    <style>
        .div_center{
            text-align: center;
            padding-top: 40px;
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
                {{-- show message after add category --}}
        @if(Session()->has('message'))
        <div class="alert alert-success">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
            {{Session()->get('message')}}
        </div>
        @endif
                <div class="div_center">
                    <h2 class="div_font">Add Category</h2>


                    <form action="{{url('add_category')}}" method="POST">
                        @csrf
                        <input type="text" class="input_color" placeholder="Enter Category Name" name="category_input">
                        <input type="submit" class="btn btn-success" name="submit" value="Add Category">
                    </form>
                </div>

                  {{-- show all categories --}}
                     <table class="table-center">
                        <tr>
                            <td>category_name</td>
                            <td>action</td>
                        </tr>

                        @foreach ($data as $data)
                        <tr>
                            <td>{{$data->category_name}}</td>
                            <td>
                                <a href="{{url('delete_category',$data->id)}}" class="btn btn-danger">delete</a>
                            </td>
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
