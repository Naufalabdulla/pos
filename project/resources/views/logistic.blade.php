@extends('layouts.main')

@section('title', 'logistic')
@section('extra')
<input type="radio" class="btn-check" name="btnradio" id="btnradio1"  checked>
<label class="btn btn-outline-secondary" for="btnradio1">Import</label>
<form action="{{ route('sell.index') }}">
    <button class="btn btn-success me-4">New</button>
</form>
@endsection
@section('container')

<ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="transfer-tab" data-bs-toggle="tab" data-bs-target="#transfer-tab-pane" type="button" role="tab" aria-controls="transfer-tab-pane" aria-selected="flase">transfer</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="outbound-tab" data-bs-toggle="tab" data-bs-target="#outbound-tab-pane" type="button" role="tab" aria-controls="outbound-tab-pane" aria-selected="false">Outbound</button>
    </li>
    <li class="nav-item flex-grow-1" role="presentation">
      <button class="nav-link" id="inbound-tab" data-bs-toggle="tab" data-bs-target="#inbound-tab-pane" type="button" role="tab" aria-controls="inbound-tab-pane" aria-selected="false">Inbound</button>
    </li>
    <img src="img/burger.svg" alt="">
</ul>

  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="transfer-tab-pane" role="tabpanel" aria-labelledby="transfer-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-1 mt-1">Source</h6>
        <h6 class="col-2 mt-1">Destination</h6>
        <h6 class="col-1 mt-1">Number</h6>
        <h6 class="col-1 mt-1">Date</h6>
        <h6 class="col-1 mt-1">Time</h6>
        <h6 class="col-1 mt-1">QTY</h6>
        <h6 class="col-1 mt-1">Price</h6>
        <h6 class="col-1 mt-1">Status</h6>
        <h6 class="col-1 mt-1">Creator</h6>
        <h6 class="col-1 mt-1">Type</h6>
        <h6 class="col-1 mt-1">Courier</h6>
      </div>
    </div>

    <div class="tab-pane fade" id="outbound-tab-pane" role="tabpanel" aria-labelledby="outbound-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-1 mt-1">Outlate</h6>
        <h6 class="col-1 mt-1">Number</h6>
        <h6 class="col-1 mt-1">Delivery</h6>
        <h6 class="col-1 mt-1">Time</h6>
        <h6 class="col-5 mt-1">Customer</h6>
        <h6 class="col-1 mt-1">Courier</h6>
        <h6 class="col-1 mt-1">Invoice</h6>
        <h6 class="col-1 mt-1">Date</h6>
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

    <div class="tab-pane fade" id="inbound-tab-pane" role="tabpanel" aria-labelledby="inbound-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-1 mt-1">Outlate</h6>
        <h6 class="col-1 mt-1">Number</h6>
        <h6 class="col-5 mt-1">Supplier</h6>
        <h6 class="col-2 mt-1">PO Number</h6>
        <h6 class="col-1 mt-1">Date</h6>
        <h6 class="col-2 mt-1">Time</h6>
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