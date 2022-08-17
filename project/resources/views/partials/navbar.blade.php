<div>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid pb-2 border-bottom">
        <a class="navbar-brand" href="#">@yield('title')</a>
          @yield('search')
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      <div class="container collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          @yield('extra')
      </div>
    </div>
  </nav> 
</div>

  