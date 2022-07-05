@extends('layouts.main')

@section('title', 'Home')
@section('extra')
  <div class="btn-group" role="group">
    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
    <label class="btn btn-outline-secondary" for="btnradio1">Today</label>

    <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
    <label class="btn btn-outline-secondary" for="btnradio2">Week</label>

    <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
    <label class="btn btn-outline-secondary" for="btnradio3">Mounth</label>

  </div>
@endsection
@section('container')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>

                    <div class="card-footer">
                        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection