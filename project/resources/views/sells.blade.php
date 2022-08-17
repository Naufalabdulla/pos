@extends('layouts.main')

@section('title', 'Sale')
@section('extra')
<div class="hstack gap-2">
<img src="img/refresh.svg" alt="" style="max-width: 40px">
<img src="img/coupon.svg" alt="" style="max-width: 25px">
<img src="img/gift.svg" alt="" style="max-width: 25px">
<img src="img/cart.svg" alt="" style="max-width: 40px">
</div>
@endsection
@section('container')

<div class="container d-flex border-bottom hstack row gx-1 gy-2 p-2 mb-2">
    <img src="img/home.svg" alt="" style="max-width: 24px">
    <div class="col-2">
      <div class="border px-2 py-1">Outlet</div>    
    </div>    
  
    <img src="img/calender.svg" alt="" style="max-width: 30px">
    <div class="col-1">
      <div class="border px-2 py-1">date</div>    
    </div> 

    <img src="img/hastag.svg" alt="" style="max-width: 24px">
    <div class="col-1">
      <div class="border px-2 py-1">ip</div>    
    </div>
  
    <img src="img/user.svg" alt="" style="max-width: 24px">
    <div class="col-1">
      <div class="border px-2 py-1">search</div>    
    </div>
    <img src="img/add2.svg" alt="" style="max-width: 24px">
  
    <div class="col-1">
      <div class="border px-2 py-1">person</div>    
    </div> 
    <div class="col-1 flex-grow-1"> </div>
    <img src="img/burger.svg" alt="" style="max-width: 24px">
</div>
  
<div class="row g-3">
  {{-- Product Item --}}
    <div class="col-4">
        <div class="vstack gap-3">
            <div class="nav nav-tabs d-flex" id="mytab" role="tablist">
              <div class="nav-item flex-fill border d-flex" role="presentation">
                <button class="nav-link active flex-fill bg-light" data-bs-toggle="tab" id="Top-tab" data-bs-target="#Top-tab-pane" type="button" role="tab" aria-controls="Top-tab-pane" aria-selected="false">Top</button>
              </div>

              <div class="nav-item flex-fill border d-flex" role="presentation">
                <button class="nav-link flex-fill bg-light" data-bs-toggle="tab" id="Shoes-tab" data-bs-target="#Shoes-tab-pane" type="button" role="tab" aria-controls="Shoes-tab-pane" aria-selected="false">Shoes</button>
              </div>

              <div class="nav-item flex-fill border d-flex" role="presentation">
                <button class="nav-link flex-fill bg-light" data-bs-toggle="tab" id="Acc-tab" data-bs-target="#Acc-tab-pane" type="button" role="tab" aria-controls="Acc-tab-pane" aria-selected="false">Acc</button>
              </div>
            </div>

            <div class="container tab-content" id="mytabcontent">
                <div class="tab-pane fade show active" id="Top-tab-pane" role="tabpanel" aria-labelledby="Top-tab" tabindex="0">
                    <div class="row gx-4 gy-2">
                        @foreach ($products as $item)
                        @if ($item->category_id == 1)
                          <div class="col-4">
                            <form action="{{route('sell.store')}}" method="POST">
                              @csrf
                              <div class="border d-flex" style="max-height: 100px">
                              <button class="btn flex-fill" type="submit" value="{{ $item->id }}" name="products_id">
                                  {{$item->name}}
                              </button>
                              </div>
                            </form>  
                          </div>
                        @endif
                        @endforeach
                        
                        <nav aria-label="navigation page" class="mt-3">
                          <ul class="pagination justify-content-center">
                            {{ $products->links() }}
                          </ul>
                        </nav>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="Shoes-tab-pane" role="tabpanel" aria-labelledby="Shoes-tab" tabindex="0">
                  <div class="row gx-4 gy-2">
                    @foreach ($products as $item)
                    @if ($item->category_id == 2)
                        <div class="col-4">
                          <form action="{{route('sell.store')}}" method="POST">
                            @csrf
                            <div class="border d-flex" style="max-height: 100px">
                            <button class="btn flex-fill" type="submit" value="{{ $item->id }}" name="products_id">
                               {{$item->name}}
                            </button>
                            </div>
                          </form>  
                        </div>
                        @endif
                    @endforeach
                    
                    <nav aria-label="navigation page" class="mt-3">
                      <ul class="pagination justify-content-center">
                        {{ $products->links() }}
                      </ul>
                    </nav>
                </div>
                </div>

                <div class="tab-pane fade" id="Acc-tab-pane" role="tabpanel" aria-labelledby="Acc-tab" tabindex="0">
                  <div class="row gx-4 gy-2">
                    @foreach ($products as $item)
                    @if ($item->category_id == 3)
                        <div class="col-4">
                          <form action="{{route('sell.store')}}" method="POST">
                            @csrf
                            <div class="border d-flex" style="max-height: 100px">
                            <button class="btn flex-fill" type="submit" value="{{ $item->id }}" name="products_id">
                               {{$item->name}}
                            </button>
                            </div>
                          </form>  
                        </div>
                    @endif    
                    @endforeach
                    
                    <nav aria-label="navigation page" class="mt-3">
                      <ul class="pagination justify-content-center">
                        {{ $products->links() }}
                      </ul>
                    </nav>
                </div>
                </div>
            </div>
        </div>
    </div>
  {{-- Product Item --}}

  {{-- Cart --}}
    <div class="col-5">
        <div class="border">
            <div class="container align-items-center hstack gap-2 p-2">
                <img src="img/cart.svg" alt="" style="max-width: 20px">
                <div>Current sale</div>
                <input type="text" class="form-control form-control-sml" placeholder="Search" aria-label="Search" style="max-width: 250px">
                <img src="img/upload.svg" alt="" style="max-width: 30px">
                <img src="img/add3.svg" alt="" style="max-width: 30px">
            </div>

            <div class="border d-flex bg-light p-2">
                <div class="px-3 flex-grow-1">Name</div>
                <div class="px-3">Code</div>
                <div class="px-3">QTY</div>
                <div class="px-3">Price Disx</div>
                <div class="px-3">Total</div>
            </div>

              {{-- Item Cart --}}
            <div class="overflow-auto" style="height: 250px">
              @if (count($carts) > 0)
              <div class="row g-0">
                @foreach ($carts as $item)
                  <div class="col-12 border-bottom"><a href="#">{{$item->product->name}}</a></div>
                @endforeach  
              </div>
              @else
              @endif
            </div>
        </div>

        <div class="d-flex align-items-start border" style="max-width: 200px">
            <div class="hstack gap-0">
                <div class="border bg-light p-2">Amount</div>
                <div class="me-5"> 53</div>
            </div>
        </div>

        <div class="row g-2 my-1">
            <div class="col-3">
                <div class="border bg-light p-2">No Tax</div>
            </div>

            <div class="col-3">
                <div class="border bg-light p-2">Discount</div>
            </div>
        </div>

        <div class="row g-2 my-2">
            <div class="col-3">
              <div class="border bg-light d-flex"><a class="btn flex-fill p-3" data-bs-toggle="modal" href="#fullfillModalToggle" role="button">Fullfillment</a></div>
            </div>
            
            <div class="col-2">
              <div class="border bg-light d-flex"><a class="btn flex-fill p-3" data-bs-toggle="modal" href="#noteModalToggle" role="button">Note</a></div>
            </div>

            <div class="col-3">
              <div class="border bg-light d-flex"><a class="btn flex-fill p-3" data-bs-toggle="modal" href="#clearModalToggle" role="button">Clear</a></div>
            </div>

            <div class="col-4">
              <div class="border bg-success d-flex"><a class="btn flex-fill p-3" data-bs-toggle="modal" href="#payModalToggle" role="button">Pay</a></div>
            </div>
        </div>
    </div>
</div>


{{-- Modal --}}

<div class="modal fade" id="fullfillModalToggle" aria-hidden="true" aria-labelledby="fullfillModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="fullfillModalToggleLabel">order fullfillment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row gx-0 gy-3 p-2">
            <div class="col-5">
                <div class="border p-3">Now</div>
            </div>
            <div class="col-7">
                <div class="border p-3">Later</div>
            </div>
            <div class="col-5">
              Deduct inventory from outlet
            </div>
            <div class="col-6">
                <select class="form-select form-select-lg" aria-label="statusSelect">
                    <option selected></option>
                    <option value="1">outlet 1</option>
                    <option value="2">outlet 2</option>
                </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">cancel</button>
        </div>
      </div>
    </div>
</div>


<div class="modal fade" id="noteModalToggle" aria-hidden="true" aria-labelledby="noteModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="noteModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row g-5">
            <div class="col-1">
                <div>Type</div>
            </div>

            <div class="col-4">
              <select class="form-select form-select-lg" aria-label="statusSelect">
                <option value="1" selected>Take away</option>
                <option value="2">Dine on</option>
              </select>
            </div>

            <div class="col-7"></div>

            <div class="col-1">
                <div>Note</div>
            </div>

            <div class="col-1">
                <div></div>
            </div>

            <div class="col-1">
                <div>PO#</div>
            </div>

            <div class="col-1">
                <div></div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">cancel</button>
    </div>
    </div>
  </div>
</div>


<div class="modal fade" id="clearModalToggle" aria-hidden="true" aria-labelledby="clearModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="clearModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        first example
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">cancel</button>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="payModalToggle" aria-hidden="true" aria-labelledby="payModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="clearModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        first example
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
        <form action="#" method="post">
          <button type="submit" class="btn btn-outline-success">Pay</button> 
        </form>
        
    </div>
    </div>
  </div>
</div>

@endsection