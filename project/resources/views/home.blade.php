@extends('layouts.main')

@section('title', 'Home')
@section('extra')
  <div class="btn-group" role="group">
    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
    <label class="btn btn-outline-secondary" for="btnradio1">Today</label>

    <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
    <label class="btn btn-outline-secondary" for="btnradio2">Week</label>

    <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
    <label class="btn btn-outline-secondary" for="btnradio3">Mounth</label>

  </div>
@endsection
@section('container')
    <div class="row gx-4 gy-2 bg-light py-2">
      <div class="col-md-10">
        <div class="border bg-white p-2">
          <div class="d-flex">
            <h4 class="flex-grow-1">Weeakly sell</h4>
    
            <div class="form-check form-switch">
                <label class="form-check-label" for="swtcbtn">tax</label>
                <input class="form-check-input" type="checkbox" role="switch" id="swtcbtn">
            </div>
          </div>

          <div id="chart" style="height: 300px"></div>
          <!-- Charting library -->
          <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
          <!-- Chartisan -->
          <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>

          <script>
            const chart = new Chartisan({
                el : '#chart', 
                url : "@chart('sample')",
            });
          </script>
        </div>
      </div> 

      
      <div class="col-md-2 ">
        <div class="border bg-white p-2">
          <h4 class="border-bottom">Today</h4>
          <p>Sales</p>
          <p>313</p>
          <p>Transaction</p>
          <p>4</p>
          <p>Quantity</p>
          <p>2</p>
          <p>New Customer</p>
          <p>0</p>
          </div>
      </div>


      <div class="col-md-6 ">
        <div class="border bg-white p-2">
          <h4 class="border-bottom">Today's Report</h4>
          <div class="border-bottom">
            <div class="d-flex">
            <p class="flex-grow-1">Best seller</p>
            <p>Quantity</p>
            </div>

            <div class="d-flex">
            <h6 class="flex-grow-1">Collar breze</h6>
            <p>8</p>
            </div>
          </div>

          <div class="border-bottom">
            <div class="d-flex">
            <p class="flex-grow-1">Best Outlet</p>
            <p>Number of Transaction</p>
            </div>

            <div class="d-flex">
            <h6 class="flex-grow-1">Outlet 2</h6>
            <p>12</p>
            </div>
          </div>
        </div>
      </div>
    </div>   
@endsection