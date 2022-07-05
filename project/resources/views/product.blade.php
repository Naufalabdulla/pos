@extends('layouts.main')

@section('title', 'Product')
@section('extra')
<div class="btn-group" role="group">
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1"  checked>
  <label class="btn btn-outline-secondary" for="btnradio1">Import</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
  <label class="btn btn-outline-secondary" for="btnradio2">Export</label>
  <button class="btn-outline-secondary" id="btnDropdown" data-bs-toggle="dropdown" aria-expanded="false">l</button>
  <ul class="dropdown-menu" aria-labelledby="btnDropdown">
    <li><a class="dropdown-item" href="#">Export with Detail</a></li>
    <li><a class="dropdown-item" href="#">Export with Transaction</a></li>
  </ul>
</div>
<form action="{{ route('customers.create') }}">
    <button class="btn btn-success me-4">add</button>
</form>
@endsection
@section('container')

<ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="category-tab" data-bs-toggle="tab" data-bs-target="#category-tab-pane" type="button" role="tab" aria-controls="category-tab-pane" aria-selected="flase">Category</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="product-tab" data-bs-toggle="tab" data-bs-target="#product-tab-pane" type="button" role="tab" aria-controls="product-tab-pane" aria-selected="false">Product</button>
    </li>
    <li class="nav-item flex-grow-1" role="presentation">
      <button class="nav-link" id="variant-tab" data-bs-toggle="tab" data-bs-target="#variant-tab-pane" type="button" role="tab" aria-controls="variant-tab-pane" aria-selected="false">Variant</button>
    </li>
    <img src="img/burger.svg" alt="">
</ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="category-tab-pane" role="tabpanel" aria-labelledby="category-tab" tabindex="0">
      {{-- @include('contacts.member') --}}
    </div>
    <div class="tab-pane fade" id="product-tab-pane" role="tabpanel" aria-labelledby="product-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-3 mt-1">Product</h6>
        <h6 class="col-2 mt-1">code</h6>
        <h6 class="col-1 mt-1">Category</h6>
        <h6 class="col-4 mt-1">Variant</h6>
        <h6 class="col-1 mt-1">Price</h6>
        <h6 class="col-1 mt-1">Realease</h6>
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
    <div class="tab-pane fade" id="variant-tab-pane" role="tabpanel" aria-labelledby="variant-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-4 mt-1">Name</h6>
        <h6 class="col-1 mt-1">Type</h6>
        <h6 class="col-1 mt-1">Code</h6>
        <h6 class="col-2 mt-1">Buying Code</h6>
        <h6 class="col-1 mt-1">Last Buy</h6>
        <h6 class="col-2 mt-1">Selling Price</h6>
        <h6 class="col-1 mt-1">Inventory</h6>
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

@endsection