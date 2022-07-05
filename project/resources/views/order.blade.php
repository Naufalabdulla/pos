@extends('layouts.main')

@section('title', 'Order')
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
<form action="{{ route('sell') }}">
    <button class="btn btn-success me-4">New</button>
</form>
@endsection
@section('container')

<ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="customer-tab" data-bs-toggle="tab" data-bs-target="#customer-tab-pane" type="button" role="tab" aria-controls="customer-tab-pane" aria-selected="flase">Customer Invoice</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="supplier-tab" data-bs-toggle="tab" data-bs-target="#supplier-tab-pane" type="button" role="tab" aria-controls="supplier-tab-pane" aria-selected="false">Suppliers Bill</button>
    </li>
    <li class="nav-item flex-grow-1" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Search Note</button>
    </li>
    <img src="img/burger.svg" alt="">
</ul>

  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="customer-tab-pane" role="tabpanel" aria-labelledby="customer-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col mt-1">Outlate</h6>
        <h6 class="col mt-1">Number</h6>
        <h6 class="col mt-1">Customers</h6>
        <h6 class="col mt-1">Date</h6>
      </div>
    </div>

    <div class="tab-pane fade" id="supplier-tab-pane" role="tabpanel" aria-labelledby="supplier-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col mt-1">Outlate</h6>
        <h6 class="col mt-1">Number</h6>
        <h6 class="col mt-1">Customers</h6>
        <h6 class="col mt-1">Date</h6>
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

    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col mt-1">Name</h6>
        <h6 class="col mt-1">code</h6>
        <h6 class="col mt-1">mobile</h6>
        <h6 class="col mt-1">email</h6>
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