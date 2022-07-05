<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    

    <title>Laravel</title>
    
  </head>
  <body>

<div class="container-fluid">
<div class="row align-items-stretch col-group">
    <div class="col overflow-hidden bg-primary p-0" style="max-width: 180px; height: 837px">
      <div class="container-fluid border-bottom border-secondary px-1 pb-1 pt-2">
        <h4 class="text-light my-2 me-3">Sentra</h4>
      </div>
      
      <div class="">
          <div class="col p-3 mx-2 my1">
            <a href="{{route('home')}}" class="text-white text-decoration-none fw-semibold">Dashboard</a>
          </div><div class="col p-3 mx-2 my1">
            <a href="{{route('product')}}" class="text-white text-decoration-none fw-semibold">Products</a>
          </div><div class="col p-3 mx-2 my1">
            <a href="{{route('sell')}}" class="text-white text-decoration-none fw-semibold">Sell</a>
          </div><div class="col p-3 mx-2 my1">
            <a href="{{route('shift')}}" class="text-white text-decoration-none fw-semibold">Shift</a>
          </div><div class="col p-3 mx-2 my1">
            <a href="{{route('report')}}" class="text-white text-decoration-none fw-semibold">Reports</a>
          </div><div class="col p-3 mx-2 my1">
            <a href="{{route('customers.index')}}" class="text-white text-decoration-none fw-semibold">Contact</a>
          </div><div class="col p-3 mx-2 my1">
            <a href="{{route('orders')}}" class="text-white text-decoration-none fw-semibold">Order</a>
          </div><div class="col p-3 mx-2 my1">
            <a href="{{route('payment')}}" class="text-white text-decoration-none fw-semibold">Payment</a>
          </div><div class="col p-3 mx-2 my1">
            <a href="{{route('debt')}}" class="text-white text-decoration-none fw-semibold">Debt</a>
          </div><div class="col p-3 mx-2 my1">
            <a href="{{route('invent')}}" class="text-white text-decoration-none fw-semibold">Inventory</a>
          </div><div class="col p-3 mx-2 my1">
            <a href="{{route('adjustment')}}" class="text-white text-decoration-none fw-semibold">Adjusment</a>
          </div><div class="col p-3 mx-2 my1">
            <a href="{{route('sell')}}" class="text-white text-decoration-none fw-semibold">Buy</a>
          </div><div class="col p-3 mx-2 my1">
            <a href="{{route('logistics')}}" class="text-white text-decoration-none fw-semibold">Logistics</a>
          </div><div class="col p-3 mx-2 my1">
            <a href="{{route('fullfill')}}" class="text-white text-decoration-none fw-semibold">Fullfillment</a>
          </div>
      </div>
    </div>
    <div class="col">
      @include('partials.navbar')
      
    <div class="content">
        @yield('container')
    </div>
    </div>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html>