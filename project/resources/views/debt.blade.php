@extends('layouts.main')

@section('title', 'Debt')
@section('extra')
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
  <label class="btn btn-outline-secondary" for="btnradio1">Import</label>
  <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
  <label class="btn btn-outline-secondary" for="btnradio2">Payment history</label>
  <form action="{{ route('customers.create') }}">
    <button class="btn btn-success me-4">View Detail</button>
  </form>
@endsection
@section('container')

<ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="receive-tab" data-bs-toggle="tab" data-bs-target="#receive-tab-pane" type="button" role="tab" aria-controls="receive-tab-pane" aria-selected="flase">Acount Receiveable</button>
    </li>
    <li class="nav-item flex-grow-1" role="presentation">
      <button class="nav-link" id="pay-tab" data-bs-toggle="tab" data-bs-target="#pay-tab-pane" type="button" role="tab" aria-controls="pay-tab-pane" aria-selected="false">Acount Payable</button>
    </li>
    <img src="img/burger.svg" alt="">
</ul>

  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="receive-tab-pane" role="tabpanel" aria-labelledby="receive-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-7 mt-1">Customer</h6>
        <h6 class="col-1 mt-1">Count</h6>
        <h6 class="col-1 mt-1">Invoice</h6>
        <h6 class="col-1 mt-1">Paid</h6>
        <h6 class="col-1 mt-1">Credit</h6>
        <h6 class="col-1 mt-1">Limit</h6>
      </div>
    </div>

    <div class="tab-pane fade" id="pay-tab-pane" role="tabpanel" aria-labelledby="pay-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col-7 mt-1">Supplier</h6>
        <h6 class="col-1 mt-1">Count</h6>
        <h6 class="col-1 mt-1">Invoice</h6>
        <h6 class="col-1 mt-1">Paid</h6>
        <h6 class="col-1 mt-1">Credit</h6>
        <h6 class="col-1 mt-1">Limit</h6>
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