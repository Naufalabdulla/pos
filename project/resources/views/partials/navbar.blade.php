<div>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid pb-2 border-bottom">
        <a class="navbar-brand" href="#">@yield('title')</a>
        <div class="input-group me-2" style="max-width: 250px">
          <input type="text" class="form-control form-control-sml" placeholder="Search" aria-label="Search" aria-describedby="button-addon">
          <button class="btn btn-outline-secondary" type="button" id="button-addon">S</button>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      <div class="container collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          @yield('extra')
      </div>
    </div>
  </nav> 
</div>

  