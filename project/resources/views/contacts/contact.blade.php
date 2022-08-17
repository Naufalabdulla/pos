@extends('layouts.main')

@section('title', 'Contact')
@section('search')
<form action="{{ route('member.index') }}">
  <div class="input-group me-2" style="max-width: 250px">
    <input type="text" class="form-control form-control-sml" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-outline-primary" type="submit">S</button>
  </div>
</form>
@endsection
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
<form action="{{ route('member.create') }}">
    <button class="btn btn-success me-4">add</button>
</form>
@endsection
@section('container')

<ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="customer-tab" data-bs-toggle="tab" data-bs-target="#customer-tab-pane" type="button" role="tab" aria-controls="customer-tab-pane" aria-selected="false">Customer</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="supplier-tab" data-bs-toggle="tab" data-bs-target="#supplier-tab-pane" type="button" role="tab" aria-controls="supplier-tab-pane" aria-selected="false">Suppliers</button>
    </li>
    <li class="nav-item flex-grow-1" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Sales</button>
    </li>
    <img src="img/burger.svg" alt="">
</ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="customer-tab-pane" role="tabpanel" aria-labelledby="customer-tab" tabindex="0">
      @include('contacts.member')
    </div>
    <div class="tab-pane fade" id="supplier-tab-pane" role="tabpanel" aria-labelledby="supplier-tab" tabindex="0">
      <div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
        <h6 class="col mt-1">Name</h6>
        <h6 class="col mt-1">code</h6>
        <h6 class="col mt-1">mobile</h6>
        <h6 class="col mt-1">email</h6>
      </div>
            @foreach ($member as $item)
            @if ($item->contact_id == 2)
            <div class="border-bottom p-2 mb-1">
              <input class="form-check-input" type="checkbox" value="" id="check">
              <label for="check">
                <a href="#">{{$item->name}}</a>
              </label>  
            </div>   
            @endif       
            @endforeach
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

{{-- pagination --}}

  

<nav aria-label="navigation page" class="mt-3">
  <ul class="pagination justify-content-center position-absolute bottom-0 start-50 translate-middle-x mb-5">
    {{ $member->links() }}
  </ul>
</nav>
@endsection