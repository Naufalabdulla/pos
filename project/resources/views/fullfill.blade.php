@extends('layouts.main')

@section('title', 'Fullfillment')
@section('extra')
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1"  checked>
  <label class="btn btn-outline-secondary" for="btnradio1">Import</label>
@endsection
@section('container')

<ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pick-tab" data-bs-toggle="tab" data-bs-target="#pick-tab-pane" type="button" role="tab" aria-controls="pick-tab-pane" aria-selected="flase">Pick</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pack-tab" data-bs-toggle="tab" data-bs-target="#pack-tab-pane" type="button" role="tab" aria-controls="pack-tab-pane" aria-selected="false">Pack</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="ship-tab" data-bs-toggle="tab" data-bs-target="#ship-tab-pane" type="button" role="tab" aria-controls="ship-tab-pane" aria-selected="false">Ship</button>
    </li>
    <li class="nav-item flex-grow-1" role="presentation">
        <button class="nav-link" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane" aria-selected="false">All</button>
    </li>
    <img src="img/burger.svg" alt="">
</ul>

  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="pick-tab-pane" role="tabpanel" aria-labelledby="pick-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col mt-1">Outlate</h6>
        <h6 class="col mt-1">Order</h6>
        <h6 class="col mt-1">Number</h6>
        <h6 class="col mt-1">Custumer</h6>
        <h6 class="col mt-1">Created</h6>
        <h6 class="col mt-1">Time</h6>
      </div>
    </div>

    <div class="tab-pane fade" id="pack-tab-pane" role="tabpanel" aria-labelledby="pack-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col mt-1">Outlate</h6>
        <h6 class="col mt-1">Order</h6>
        <h6 class="col mt-1">Number</h6>
        <h6 class="col mt-1">Custumer</h6>
        <h6 class="col mt-1">Created</h6>
        <h6 class="col mt-1">Time</h6>
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

    <div class="tab-pane fade" id="ship-tab-pane" role="tabpanel" aria-labelledby="ship-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col mt-1">Outlate</h6>
        <h6 class="col mt-1">Order</h6>
        <h6 class="col mt-1">Number</h6>
        <h6 class="col mt-1">Custumer</h6>
        <h6 class="col mt-1">Created</h6>
        <h6 class="col mt-1">Time</h6>
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

    <div class="tab-pane fade" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-1 mt-1">Outlate</h6>
          <h6 class="col-2 mt-1">Order</h6>
          <h6 class="col-1 mt-1">Number</h6>
          <h6 class="col-5 mt-1">Custumer</h6>
          <h6 class="col-1 mt-1">Created</h6>
          <h6 class="col-1 mt-1">Time</h6>
          <h6 class="col-1 mt-1">Status</h6>
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