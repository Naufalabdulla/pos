@extends('layouts.main')

@section('title', 'add contact')
@section('extra')
    <div class="justify-content-end ms-2">
        <form action="{{ URL::previous() }}">
            <input type="submit" value="cancel" class="btn btn-outline-danger">
        </form>
    </div>
    <div class="justify-content-end ms-2">
        <form action="{{ route('member.store') }}"  method="POST">
            <input type="submit" value="save" class="btn btn-outline-success">
        </form>
    </div>
@endsection
@section('container')
    @include('partials.form')
@endsection