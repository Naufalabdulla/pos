@extends('layouts.main')

@section('title', 'show')
@section('extra')
<div class="justify-content-end ms-2">
    <form action="{{ URL::previous() }}">
        <input type="submit" value="back" class="btn btn-outline-danger">
    </form>
</div>
@endsection
@section('container')
    <div class="container-fluid bg-light my-3 px-1">
        <div class="row g-3 p-1">

            <div class="col-3">
                <div class="bg-white border p-2">
                    <img src="..." alt="..." class="mx-5 py-5">
                    <h5 class="bg-success opacity-75 text-center">activd</h5>
                    <h6 class="fw-semibold text-center">Alpha</h6>
                </div>
            </div>

            <div class="col-5">
                <div class="bg-white border p-3">
                  <h5>Contact</h5>
                  <form class="row g-3 py-3" action="#" >
                    <div class="col-md-12">
                        <input type="text" id="email" placeholder="Email" class="form-control p-3">
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="phone" placeholder="Phone" class="form-control p-3">
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="mobile" placeholder="Mobile" class="form-control p-3">
                    </div>
                   </form>
                </div>
            </div>

            <div class="col-4 d-flex flex-column">
               <div class="bg-white border p-2 mb-4">
                <h5>Sales History</h5>
               </div>
               <div class="bg-white border p-3">
                <h5 class="mb-4">Debt</h5>
                <div class="row g-0 border">
                  <div class="col-6"><div class=" bg-light p-3">Receiveable</div></div>
                  <div class="col-6"><div class=" bg-light p-3">Payable</div></div>
                </div>
               </div>
            </div>

            <div class="col-3">
                <div class="bg-white border p-3">
                    <h5 class="text-center mb-5">Loyalty Info</h5>
                    <form class="row gy-3" action="#">
                        <div class="col-md-12 position-relative">
                          <p class="position-absolute top-0 start-50 translate-middle text-secondary bg-white ms-5 p-1">Loyalty</p>
                          <input type="text" id="0" placeholder="0" class="form-control p-3">
                        </div>
                        <div class="col-md-12 position-relative">
                          <p class="position-absolute top-0 start-50 translate-middle bg-white text-secondary ms-5 p-1">Mamber</p>
                          <input type="text" id="jan" placeholder="10 jan 2021" class="form-control p-3">
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-5">
                <div class="border bg-white p-3">
                    <h5 class="mb-3">Personal Information</h5>
                    <form class="row gx-4 gy-3" action="#">
                        <div class="col-6 position-relative">
                            <p class="position-absolute top-0 start-50 translate-middle text-secondary bg-white ms-5 p-1">Birthday</p>
                            <input type="text" id="" placeholder="-" class="form-control p-3">
                        </div>
                        <div class="col-6 position-relative">
                            <p class="position-absolute top-0 start-50 translate-middle text-secondary bg-white ms-5 p-1">Gender</p>
                            <input type="text" id="" placeholder="" class="form-control p-3">
                        </div>
                        <div class="col-6">
                            <input type="text" id="" placeholder="Identification" class="form-control p-3">
                        </div>
                        <div class="col-6">
                            <input type="text" id="" placeholder="Race" class="form-control p-3">
                        </div>
                        <div class="col-6">
                            <input type="text" id="" placeholder="City" class="form-control p-3">
                        </div>
                        <div class="col-6">
                            <input type="text" id="" placeholder="Nationality" class="form-control p-3">
                        </div>
                        <div class="col-12 position-relative">
                            <p class="position-absolute top-0 start-50 translate-middle text-secondary bg-white p-1">address</p>
                            <input type="text" id="" placeholder="" class="form-control p-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection