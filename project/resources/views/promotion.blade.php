@extends('layouts.main')

@section('title', 'Promotion')
@section('extra')
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1"  checked>
  <label class="btn btn-outline-secondary" for="btnradio1">Import</label>
@endsection
@section('container')

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="event-tab" data-bs-toggle="tab" data-bs-target="#event-tab-pane" type="button" role="tab" aria-controls="event-tab-pane" aria-selected="flase">Promotion Event</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="coupon-tab" data-bs-toggle="tab" data-bs-target="#coupon-tab-pane" type="button" role="tab" aria-controls="coupon-tab-pane" aria-selected="false">Promotion Coupon</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="price-tab" data-bs-toggle="tab" data-bs-target="#price-tab-pane" type="button" role="tab" aria-controls="price-tab-pane" aria-selected="false">Price Book</button>
    </li>
</ul>

  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="event-tab-pane" role="tabpanel" aria-labelledby="event-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-2 mt-1">Name</h6>
        <h6 class="col-1 mt-1">Start</h6>
        <h6 class="col-1 mt-1">time</h6>
        <h6 class="col-1 mt-1">Expiration</h6>
        <h6 class="col-1 mt-1">Time</h6>
        <h6 class="col-2 mt-1">Outlet</h6>
        <h6 class="col-1 mt-1">Type</h6>
        <h6 class="col-1 mt-1">Min</h6>
        <h6 class="col-1 mt-1">Require</h6>
        <h6 class="col-1 mt-1">Reward</h6>
      </div>
    </div>

    <div class="tab-pane fade" id="coupon-tab-pane" role="tabpanel" aria-labelledby="coupon-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-2 mt-1">Key</h6>
        <h6 class="col-1 mt-1">Balance</h6>
        <h6 class="col-2 mt-1">Type</h6>
        <h6 class="col-3 mt-1">Desc</h6>
        <h6 class="col-1 mt-1">Discount</h6>
        <h6 class="col-2 mt-1">Created</h6>
        <h6 class="col-1 mt-1">Expiry</h6>
      </div>
            {{-- @foreach ($Supplies as $item)
            <div class="border-bottom p-2 mb-1">
              <input class="form-check-input" type="checkbox" value="" id="check">
              <label for="check">
                {{$item->name}}
              </label>  
            </div>          
            @endforeach --}}
    </div>

    <div class="tab-pane fade" id="price-tab-pane" role="tabpanel" aria-labelledby="price-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-2 mt-1">Name</h6>
        <h6 class="col-1 mt-1">Min QTY</h6>
        <h6 class="col-3 mt-1">Outlet</h6>
        <h6 class="col-6 mt-1">Description</h6>
      </div>
            {{-- @foreach ($Supplies as $item)
            <div class="border-bottom p-2 mb-1">
              <input class="form-check-input" type="checkbox" value="" id="check">
              <label for="check">
                {{$item->name}}
              </label>  
            </div>          
            @endforeach --}}
    </div>
  </div>

  <nav aria-label="navigation page" class="mt-3">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active" aria-current="page">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a>
      </li>
    </ul>
  </nav>

@endsection