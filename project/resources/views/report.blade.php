@extends('layouts.main')

@section('title', 'Reports')
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
<div class="btn-group" role="group">
<input type="radio" class="btn-check" name="btnradio" id="btnradio3">
<label class="btn btn-outline-secondary" for="btnradio3">Compare with outlet</label>
<button class="btn btn-outline-secondary" id="btnCompare" data-bs-toggle="dropdown" aria-expanded="false">v</button>
<ul class="dropdown-menu" aria-labelledby="btnCompare">
  <li><a class="dropdown-item" href="#">Export with Detail</a></li>
  <li><a class="dropdown-item" href="#">Export with Transaction</a></li>
</ul>
</div>
@endsection
@section('container')
<ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="product-tab" data-bs-toggle="tab" data-bs-target="#product-tab-pane" type="button" role="tab" aria-controls="product-tab-pane" aria-selected="flase">Product</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="category-tab" data-bs-toggle="tab" data-bs-target="#category-tab-pane" type="button" role="tab" aria-controls="category-tab-pane" aria-selected="flase">Category</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="detail-tab" data-bs-toggle="tab" data-bs-target="#detail-tab-pane" type="button" role="tab" aria-controls="detail-tab-pane" aria-selected="flase">Detail</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="summary-tab" data-bs-toggle="tab" data-bs-target="#summary-tab-pane" type="button" role="tab" aria-controls="summary-tab-pane" aria-selected="flase">Summary</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="customer-tab" data-bs-toggle="tab" data-bs-target="#customer-tab-pane" type="button" role="tab" aria-controls="customer-tab-pane" aria-selected="flase">Customers</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="outlet-tab" data-bs-toggle="tab" data-bs-target="#outlet-tab-pane" type="button" role="tab" aria-controls="outlet-tab-pane" aria-selected="flase">Outlet</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="type-tab" data-bs-toggle="tab" data-bs-target="#type-tab-pane" type="button" role="tab" aria-controls="type-tab-pane" aria-selected="flase">Type</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales-tab-pane" type="button" role="tab" aria-controls="sales-tab-pane" aria-selected="flase">sales</button>
    </li>
    <li class="nav-item flex-grow-1" role="presentation">
      <button class="nav-link" id="montly-tab" data-bs-toggle="tab" data-bs-target="#montly-tab-pane" type="button" role="tab" aria-controls="montly-tab-pane" aria-selected="false">Monthly</button>
    </li>
    <img src="img/burger.svg" alt="">
</ul>

  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="product-tab-pane" role="tabpanel" aria-labelledby="product-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-7 mt-1">Customer</h6>
        <h6 class="col-1 mt-1">Count</h6>
        <h6 class="col-1 mt-1">Invoice</h6>
        <h6 class="col-1 mt-1">Paid</h6>
        <h6 class="col-1 mt-1">Credit</h6>
        <h6 class="col-1 mt-1">Limit</h6>
      </div>
    </div>

    <div class="tab-pane fade" id="category-tab-pane" role="tabpanel" aria-labelledby="category-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-7 mt-1">Supplier</h6>
        <h6 class="col-1 mt-1">Count</h6>
        <h6 class="col-1 mt-1">Invoice</h6>
        <h6 class="col-1 mt-1">Paid</h6>
        <h6 class="col-1 mt-1">Credit</h6>
        <h6 class="col-1 mt-1">Limit</h6>
      </div>
    </div>

    <div class="tab-pane fade" id="detail-tab-pane" role="tabpanel" aria-labelledby="detail-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-7 mt-1">Supplier</h6>
          <h6 class="col-1 mt-1">Count</h6>
          <h6 class="col-1 mt-1">Invoice</h6>
          <h6 class="col-1 mt-1">Paid</h6>
          <h6 class="col-1 mt-1">Credit</h6>
          <h6 class="col-1 mt-1">Limit</h6>
        </div>
      </div>

      <div class="tab-pane fade" id="summary-tab-pane" role="tabpanel" aria-labelledby="summary-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-7 mt-1">Supplier</h6>
          <h6 class="col-1 mt-1">Count</h6>
          <h6 class="col-1 mt-1">Invoice</h6>
          <h6 class="col-1 mt-1">Paid</h6>
          <h6 class="col-1 mt-1">Credit</h6>
          <h6 class="col-1 mt-1">Limit</h6>
        </div>
      </div>

      <div class="tab-pane fade" id="customer-tab-pane" role="tabpanel" aria-labelledby="cutomer-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-7 mt-1">Supplier</h6>
          <h6 class="col-1 mt-1">Count</h6>
          <h6 class="col-1 mt-1">Invoice</h6>
          <h6 class="col-1 mt-1">Paid</h6>
          <h6 class="col-1 mt-1">Credit</h6>
          <h6 class="col-1 mt-1">Limit</h6>
        </div>
      </div>

      <div class="tab-pane fade" id="outlet-tab-pane" role="tabpanel" aria-labelledby="outlet-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-7 mt-1">Supplier</h6>
          <h6 class="col-1 mt-1">Count</h6>
          <h6 class="col-1 mt-1">Invoice</h6>
          <h6 class="col-1 mt-1">Paid</h6>
          <h6 class="col-1 mt-1">Credit</h6>
          <h6 class="col-1 mt-1">Limit</h6>
        </div>
      </div>

      <div class="tab-pane fade" id="type-tab-pane" role="tabpanel" aria-labelledby="type-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-7 mt-1">Supplier</h6>
          <h6 class="col-1 mt-1">Count</h6>
          <h6 class="col-1 mt-1">Invoice</h6>
          <h6 class="col-1 mt-1">Paid</h6>
          <h6 class="col-1 mt-1">Credit</h6>
          <h6 class="col-1 mt-1">Limit</h6>
        </div>
      </div>

      <div class="tab-pane fade" id="sales-tab-pane" role="tabpanel" aria-labelledby="sales-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-7 mt-1">Supplier</h6>
          <h6 class="col-1 mt-1">Count</h6>
          <h6 class="col-1 mt-1">Invoice</h6>
          <h6 class="col-1 mt-1">Paid</h6>
          <h6 class="col-1 mt-1">Credit</h6>
          <h6 class="col-1 mt-1">Limit</h6>
        </div>
      </div>

      <div class="tab-pane fade" id="montly-tab-pane" role="tabpanel" aria-labelledby="montly-tab" tabindex="0">
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