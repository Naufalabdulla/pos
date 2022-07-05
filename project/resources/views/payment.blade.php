@extends('layouts.main')

@section('title', 'payment')
@section('extra')
<input type="radio" class="btn-check" name="btnradio" id="btnradio1"  checked>
<label class="btn btn-outline-secondary" for="btnradio1">Import</label>
@endsection
@section('container')
<ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="received-tab" data-bs-toggle="tab" data-bs-target="#received-tab-pane" type="button" role="tab" aria-controls="received-tab-pane" aria-selected="flase">Received</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="byoutlet-tab" data-bs-toggle="tab" data-bs-target="#byoutlet-tab-pane" type="button" role="tab" aria-controls="byoutlet-tab-pane" aria-selected="false">By Outlet</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="daily-tab" data-bs-toggle="tab" data-bs-target="#daily-tab-pane" type="button" role="tab" aria-controls="daily-tab-pane" aria-selected="false">Daily</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="detail-tab" data-bs-toggle="tab" data-bs-target="#detail-tab-pane" type="button" role="tab" aria-controls="detail-tab-pane" aria-selected="false">Detail</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="method-tab" data-bs-toggle="tab" data-bs-target="#method-tab-pane" type="button" role="tab" aria-controls="method-tab-pane" aria-selected="false">Method Analis</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment-tab-pane" type="button" role="tab" aria-controls="payment-tab-pane" aria-selected="false">Payment Made</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="write-tab" data-bs-toggle="tab" data-bs-target="#write-tab-pane" type="button" role="tab" aria-controls="write-tab-pane" aria-selected="false">Write Off</button>
    </li>
    <li class="nav-item flex-grow-1" role="presentation">
        <button class="nav-link" id="gate-tab" data-bs-toggle="tab" data-bs-target="#gate-tab-pane" type="button" role="tab" aria-controls="gate-tab-pane" aria-selected="false">Payment Gateway</button>
    </li>
    <img src="img/burger.svg" alt="">
</ul>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="received-tab-pane" role="tabpanel" aria-labelledby="received-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-5 mt-1">Type</h6>
          <h6 class="col-2 mt-1">count</h6>
          <h6 class="col-2 mt-1">Amount</h6>
          <h6 class="col-2 mt-1">MDR</h6>
          <h6 class="col-1 mt-1">NETT</h6>
        </div>
    
        {{-- @foreach ($collection as $item) --}}
          <div class="row border-bottom p-2 mx-2 mb-1">
          <div class="col-5">dummy</div>
          <div class="col-2">2</div>
          <div class="col-2">277</div>
          <div class="col-2 text-danger">0</div>
          <div class="col-1 text-success">277.3</div>
          </div>  
        {{-- @endforeach --}}
        
        <div class="row fw-bold p-2 mx-2 mb-1">
          <div class="col-5">Total</div>
          <div class="col-2">2</div>
          <div class="col-2">277</div>
          <div class="col-2 text-danger">0</div>
          <div class="col-1 text-success">277.3</div>
        </div>  
    </div>
    
    
    <div class="tab-pane fade" id="byoutlet-tab-pane" role="tabpanel" aria-labelledby="byoutlet-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-6 mt-1">Type</h6>
          <h6 class="col-5 mt-1">count</h6>
          <h6 class="col-1 mt-1">Amount</h6>
        </div>
    
        {{-- @foreach ($collection as $item) --}}
          <div class="row border-bottom p-2 mx-2 mb-1">
            <div class="col-6">dummy</div>
            <div class="col-5">2</div>
            <div class="col-1">277</div>
          </div>  
        {{-- @endforeach --}}
        
        <div class="row fw-bold p-2 mx-2 mb-1">
          <div class="col-6">Total</div>
          <div class="col-5">2</div>
          <div class="col-1">277</div>
        </div>  
    </div>

    
    <div class="tab-pane fade" id="daily-tab-pane" role="tabpanel" aria-labelledby="daily-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-4 mt-1">Day</h6>
          <h6 class="col-5 mt-1">Date</h6>
          <h6 class="col-2 mt-1">Cash</h6>
          <h6 class="col-1 mt-1">Total</h6>
        </div>
    
        {{-- @foreach ($collection as $item) --}}
          <div class="row border-bottom p-2 mx-2 mb-1">
            <div class="col-4">dummy</div>
            <div class="col-5">dummy</div>
            <div class="col-2">2</div>
            <div class="col-1">277</div>
          </div>  
        {{-- @endforeach --}}
        
        <div class="row fw-bold p-2 mx-2 mb-1">
          <div class="col-6">Total</div>
          <div class="col-5">2</div>
          <div class="col-1">277</div>
        </div>  
    </div>


    <div class="tab-pane fade" id="detail-tab-pane" role="tabpanel" aria-labelledby="detail-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-4 mt-1">Day</h6>
          <h6 class="col-5 mt-1">Date</h6>
          <h6 class="col-2 mt-1">Cash</h6>
          <h6 class="col-1 mt-1">Total</h6>
        </div>
    
        {{-- @foreach ($collection as $item) --}}
          <div class="row border-bottom p-2 mx-2 mb-1">
            <div class="col-6">dummy</div>
            <div class="col-5">2</div>
            <div class="col-1">277</div>
          </div>  
        {{-- @endforeach --}}
        
        <div class="row fw-bold p-2 mx-2 mb-1">
          <div class="col-6">Total</div>
          <div class="col-5">2</div>
          <div class="col-1">277</div>
        </div>  
    </div>


    <div class="tab-pane fade" id="method-tab-pane" role="tabpanel" aria-labelledby="method-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-1 mt-1">No</h6>
          <h6 class="col-3 mt-1">Pyment Type</h6>
          <h6 class="col-1 mt-1">Count</h6>
          <h6 class="col-1 mt-1">Minimum</h6>
          <h6 class="col-2 mt-1">Maxmimun</h6>
          <h6 class="col-3 mt-1">Average</h6>
          <h6 class="col-1 mt-1">TotalAmount</h6>
        </div>
    
        {{-- @foreach ($collection as $item) --}}
          <div class="row border-bottom p-2 mx-2 mb-1">
            <div class="col-1">dummy</div>
            <div class="col-3">2</div>
            <div class="col-2">277</div>
            <div class="col-2">277</div>
            <div class="col-2">277</div>
            <div class="col-2">277</div>
            <div class="col-1">277</div>
          </div>  
        {{-- @endforeach --}}
        
        <div class="row fw-bold p-2 mx-2 mb-1">
          <div class="col-6">Total</div>
          <div class="col-5">2</div>
          <div class="col-1">277</div>
        </div>  
    </div>


    <div class="tab-pane fade" id="payment-tab-pane" role="tabpanel" aria-labelledby="payment-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-1 mt-1">Day</h6>
          <h6 class="col-1 mt-1">Date</h6>
          <h6 class="col-9 mt-1">Debit Card</h6>
          <h6 class="col-1 mt-1">Total</h6>
        </div>
    
        {{-- @foreach ($collection as $item) --}}
          <div class="row border-bottom p-2 mx-2 mb-1">
            <div class="col-1">dummy</div>
            <div class="col-1">2</div>
            <div class="col-9">277</div>
            <div class="col-1">277</div>
          </div>  
        {{-- @endforeach --}}
        
        <div class="row fw-bold p-2 mx-2 mb-1">
          <div class="col-6">Total</div>
          <div class="col-5">2</div>
          <div class="col-1">277</div>
        </div>  
    </div>


    <div class="tab-pane fade" id="write-tab-pane" role="tabpanel" aria-labelledby="write-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-4 mt-1">Outlet</h6>
          <h6 class="col-2 mt-1">Number</h6>
          <h6 class="col-1 mt-1">Created</h6>
          <h6 class="col-4 mt-1">Creator</h6>
          <h6 class="col-1 mt-1">Amount</h6>
        </div>
    
        {{-- @foreach ($collection as $item) --}}
          <div class="row border-bottom p-2 mx-2 mb-1">
            <div class="col-4">dummy</div>
            <div class="col-2">2</div>
            <div class="col-1">277</div>
            <div class="col-4">277</div>
            <div class="col-1">277</div>
          </div>  
        {{-- @endforeach --}}
        
        <div class="row fw-bold p-2 mx-2 mb-1">
          <div class="col-6">Total</div>
          <div class="col-5">2</div>
          <div class="col-1">277</div>
        </div>  
    </div>


    <div class="tab-pane fade" id="gate-tab-pane" role="tabpanel" aria-labelledby="gate-tab" tabindex="0">
        <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
          <h6 class="col-1 mt-1">Register</h6>
          <h6 class="col-5 mt-1">Number</h6>
          <h6 class="col-1 mt-1">Amount</h6>
          <h6 class="col-2 mt-1">Creator</h6>
          <h6 class="col-2 mt-1">Type</h6>
          <h6 class="col-1 mt-1">StatusCode</h6>
        </div>
    
        {{-- @foreach ($collection as $item) --}}
          <div class="row border-bottom p-2 mx-2 mb-1">
            <div class="col-1">dummy</div>
            <div class="col-5">2</div>
            <div class="col-1">277</div>
            <div class="col-2">277</div>
            <div class="col-2">277</div>
            <div class="col-1">277</div>
          </div>  
        {{-- @endforeach --}}
        
        <div class="row fw-bold p-2 mx-2 mb-1">
          <div class="col-6">Total</div>
          <div class="col-5">2</div>
          <div class="col-1">277</div>
        </div>  
    </div>

</div>
@endsection