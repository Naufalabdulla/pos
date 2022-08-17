@extends('layouts.main')

@section('title', 'My Shift')
@section('extra')
<form action="{{ route('sell.index') }}">
  <button class="btn btn-outline-secondary me-4">Back to POS</button>
</form>
@endsection
@section('container')
<ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="my-tab" data-bs-toggle="tab" data-bs-target="#my-tab-pane" type="button" role="tab" aria-controls="my-tab-pane" aria-selected="flase">My shift</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="shift-tab" data-bs-toggle="tab" data-bs-target="#shift-tab-pane" type="button" role="tab" aria-controls="shift-tab-pane" aria-selected="false">Active shift</button>
    </li>
    <li class="nav-item flex-grow-1" role="presentation">
      <button class="nav-link" id="previous-tab" data-bs-toggle="tab" data-bs-target="#previous-tab-pane" type="button" role="tab" aria-controls="previous-tab-pane" aria-selected="false">Previoud Shift</button>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade" id="previous-tab-pane" role="tabpanel" aria-labelledby="previous-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col mt-1">Cashier</h6>
        <h6 class="col mt-1">Number</h6>
        <h6 class="col mt-1">Open</h6>
        <h6 class="col mt-1">Close</h6>
        <h6 class="col mt-1">Sales & Tax</h6>
        <h6 class="col mt-1">Invoice</h6>
        <h6 class="col mt-1">Outlet</h6>
        <h6 class="col mt-1">Register</h6>
        <h6 class="col mt-1">Visitor</h6>
      </div>
    </div>
  </div>
@endsection