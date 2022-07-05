<div class="d-flex row bg-light pt-1 p-1 m-2 border" style="width: auto">
  <h6 class="col mt-1">Name</h6>
  <h6 class="col mt-1">code</h6>
  <h6 class="col mt-1">non</h6>
  <h6 class="col mt-1">email</h6>
</div>
@foreach ($contacts as $item)
<div class="border-bottom p-2 mb-1">
  <input class="form-check-input" type="checkbox" value="" id="check">
  <label for="check">
    <a href="{{ route('show') }}">{{$item->name}}</a>
  </label>  
</div>          
@endforeach