@extends('layouts.main')

@section('title', 'Inventory')
@section('extra')
<div class="btn-group" role="group">
<input type="radio" class="btn-check" name="btnradio" id="btnradio2">
<label class="btn btn-outline-secondary" for="btnradio2">Export</label>
<button class="btn btn-outline-secondary" id="btnDropdown" data-bs-toggle="dropdown" aria-expanded="false">v</button>
<ul class="dropdown-menu" aria-labelledby="btnDropdown">
  <li><a class="dropdown-item" href="#">Export with Detail</a></li>
  <li><a class="dropdown-item" href="#">Export with Transaction</a></li>
</ul>
</div>
@endsection
@section('container')
<ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="valution-tab" data-bs-toggle="tab" data-bs-target="#valution-tab-pane" type="button" role="tab" aria-controls="valution-tab-pane" aria-selected="flase">valution</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="product-tab" data-bs-toggle="tab" data-bs-target="#product-tab-pane" type="button" role="tab" aria-controls="product-tab-pane" aria-selected="flase">product</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="outlet-tab" data-bs-toggle="tab" data-bs-target="#outlet-tab-pane" type="button" role="tab" aria-controls="outlet-tab-pane" aria-selected="flase">outlet</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="time-tab" data-bs-toggle="tab" data-bs-target="#time-tab-pane" type="button" role="tab" aria-controls="time-tab-pane" aria-selected="flase">time</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="alocate-tab" data-bs-toggle="tab" data-bs-target="#alocate-tab-pane" type="button" role="tab" aria-controls="alocate-tab-pane" aria-selected="flase">alocates</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="awaiting-tab" data-bs-toggle="tab" data-bs-target="#awaiting-tab-pane" type="button" role="tab" aria-controls="awaiting-tab-pane" aria-selected="flase">Awaiting</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="low-tab" data-bs-toggle="tab" data-bs-target="#low-tab-pane" type="button" role="tab" aria-controls="low-tab-pane" aria-selected="flase">Type</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="over-tab" data-bs-toggle="tab" data-bs-target="#over-tab-pane" type="button" role="tab" aria-controls="over-tab-pane" aria-selected="flase">over</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="quantity-tab" data-bs-toggle="tab" data-bs-target="#quantity-tab-pane" type="button" role="tab" aria-controls="quantity-tab-pane" aria-selected="false">Highest Quantity</button>
    </li>
    <li class="nav-item flex-grow-1" role="presentation">
      <button class="nav-link" id="transit-tab" data-bs-toggle="tab" data-bs-target="#transit-tab-pane" type="button" role="tab" aria-controls="transit-tab-pane" aria-selected="false">In Transit</button>
    </li>
    <img src="img/burger.svg" alt="">
</ul>

  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="valution-tab-pane" role="tabpanel" aria-labelledby="valution-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-5 mt-1">Name</h6>
        <h6 class="col-2 mt-1">Code</h6>
        <h6 class="col-1 mt-1">QTY</h6>
        <h6 class="col-1 mt-1">UOM</h6>
        <h6 class="col-1 mt-1">Cost</h6>
        <h6 class="col-1 mt-1">Price</h6>
        <h6 class="col-1 mt-1">Discount</h6>
      </div>
    </div>

    <div class="tab-pane fade" id="product-tab-pane" role="tabpanel" aria-labelledby="product-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-3 mt-1">Name</h6>
        <h6 class="col-3 mt-1">Code</h6>
        <h6 class="col-3 mt-1">Total</h6>
        <h6 class="col-2 mt-1">b1</h6>
        <h6 class="col-1 mt-1">UOM</h6>
      </div>
    </div>

    <div class="tab-pane fade" id="outlet-tab-pane" role="tabpanel" aria-labelledby="outlet-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-8 mt-1">Name</h6>
          <h6 class="col-1 mt-1">Code</h6>
          <h6 class="col-1 mt-1">ON Hand</h6>
          <h6 class="col-1 mt-1">Buffer</h6>
          <h6 class="col-1 mt-1">Difference</h6>
        </div>
      </div>

      <div class="tab-pane fade" id="time-tab-pane" role="tabpanel" aria-labelledby="time-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-3 mt-1">Name</h6>
          <h6 class="col-1 mt-1">Code</h6>
          <h6 class="col-3 mt-1">Category</h6>
          <h6 class="col-2 mt-1">ON Hand</h6>
          <h6 class="col-2 mt-1">Allocated</h6>
          <h6 class="col-1 mt-1">Available</h6>
        </div>
      </div>

      <div class="tab-pane fade" id="alocate-tab-pane" role="tabpanel" aria-labelledby="cutomer-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-3 mt-1">Name</h6>
          <h6 class="col-1 mt-1">Code</h6>
          <h6 class="col-3 mt-1">Category</h6>
          <h6 class="col-2 mt-1">ON Hand</h6>
          <h6 class="col-2 mt-1">Allocated</h6>
          <h6 class="col-1 mt-1">Available</h6>
        </div>
      </div>

      <div class="tab-pane fade" id="awaiting-tab-pane" role="tabpanel" aria-labelledby="awaiting-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
            <h6 class="col-3 mt-1">Name</h6>
            <h6 class="col-1 mt-1">Code</h6>
            <h6 class="col-3 mt-1">Category</h6>
            <h6 class="col-2 mt-1">ON Hand</h6>
            <h6 class="col-2 mt-1">Awaiting</h6>
            <h6 class="col-1 mt-1">Future</h6>
        </div>
      </div>

      <div class="tab-pane fade" id="low-tab-pane" role="tabpanel" aria-labelledby="low-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-7 mt-1">Supplier</h6>
          <h6 class="col-1 mt-1">Count</h6>
          <h6 class="col-1 mt-1">Invoice</h6>
          <h6 class="col-1 mt-1">Paid</h6>
          <h6 class="col-1 mt-1">Credit</h6>
          <h6 class="col-1 mt-1">Limit</h6>
        </div>
      </div>

      <div class="tab-pane fade" id="over-tab-pane" role="tabpanel" aria-labelledby="over-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-7 mt-1">Supplier</h6>
          <h6 class="col-1 mt-1">Count</h6>
          <h6 class="col-1 mt-1">Invoice</h6>
          <h6 class="col-1 mt-1">Paid</h6>
          <h6 class="col-1 mt-1">Credit</h6>
          <h6 class="col-1 mt-1">Limit</h6>
        </div>
      </div>

      <div class="tab-pane fade" id="quantity-tab-pane" role="tabpanel" aria-labelledby="quantity-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-7 mt-1">Supplier</h6>
          <h6 class="col-1 mt-1">Count</h6>
          <h6 class="col-1 mt-1">Invoice</h6>
          <h6 class="col-1 mt-1">Paid</h6>
          <h6 class="col-1 mt-1">Credit</h6>
          <h6 class="col-1 mt-1">Limit</h6>
        </div>
      </div>

      <div class="tab-pane fade" id="transit-tab-pane" role="tabpanel" aria-labelledby="transit-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-7 mt-1">Supplier</h6>
          <h6 class="col-1 mt-1">Count</h6>
          <h6 class="col-1 mt-1">Invoice</h6>
          <h6 class="col-1 mt-1">Paid</h6>
          <h6 class="col-1 mt-1">Credit</h6>
          <h6 class="col-1 mt-1">Limit</h6>
        </div>
      </div>
  </div>
@endsection