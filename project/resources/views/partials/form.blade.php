<div class="container-fluid row bg-light p-1 justify-content-between">
    <div class="col d-flex flex-column">
        <div class="bg-white border m-2 p-3" style="max-width: auto">
            <h4>General Information</h4>
            <form class="row g-3" action="#">
                <div class="col-md-2">
                  <input type="text" id="title" placeholder="title" class="form-control p-3" {{--value="{{ old('title', optional($contact ?? null)->name) }}"--}}>
                </div>
                <div class="col-md-5">
                    <input type="text" id="name" placeholder="First Name" class="form-control p-3" value="{{ old('name', optional($item ?? null)->name) }}">
                </div>                        
                <div class="col-md-5">
                    <input type="text" id="lastName" placeholder="lastName" class="form-control p-3" {{--value="{{ old('title', optional($contact ?? null)->name) }}"--}}>
                </div>                        
                <div class="col-md-7">
                    <input type="text" id="displayName" placeholder="displayName" class="form-control p-3" {{--value="{{ old('title', optional($contact ?? null)->name) }}"--}}>
                </div>                    
                <div class="col-md-5 position-relative">
                    <p class="position-absolute top-0 start-0 translate-middle text-secondary bg-white ms-5 p-1">gender</p>
                    <select class="form-select form-select-lg mb-3" aria-label="statusSelect">
                        <option selected>...</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>                    
                <div class="col-md-6">
                    <input type="text" id="identification" placeholder="identification" class="form-control p-3" {{--value="{{ old('title', optional($contact ?? null)->name) }}"--}}>
                </div>                    
                <div class="col-md-3">
                    <input type="text" id="title" placeholder="title" class="form-control p-3" {{--value="{{ old('title', optional($contact ?? null)->name) }}"--}}>
                </div>                    
                <div class="col-md-3 position-relative">
                    <p class="position-absolute top-0 start-0 translate-middle ms-5 p-1 text-secondary bg-white">City</p>
                    <select class="form-select form-select-lg" aria-label="citySelect">
                        <option selected></option>
                        <option value="1"></option>
                    </select>
                </div>
            </form>
        </div>
        <div class="col bg-white border m-2 p-3" style="max-width: auto">
            <h4>Contact Information</h4>
            <form class="row g-3" action="#">
                <div class="col-md-12">
                    <input type="text" name="email" id="email" placeholder="email" class="form-control p-3">
                </div>
                
                <div class="col-md-6">
                    <input type="text" name="phone" id="phone" placeholder="phone" class="form-control p-3">
                </div>
                
                <div class="col-md-6">
                    <input type="text" name="mobile" id="mobile" placeholder="mobile" class="form-control p-3">
                </div>
                
                <div class="col-md-12">
                    <input type="text" name="address" id="address" placeholder="address" class="form-control p-3">
                </div>
            </form>
        </div>
    </div>
    <div class="col bg-white border m-2 p-3" style="max-width: 500px; height: 500px;">
        <h4>Properties</h4>
        <form class="row g-3 p-2" action="#">
            @csrf
           <div class="col-md-12">
            <input type="text" name="profile" id="profile" placeholder="profile" class="form-control p-3">
           </div>
           <div class="col-md-12">
            <input type="text" name="customercode" id="costomercode" placeholder="costomercode" class="form-control p-3">
           </div>
           <div class="col-md-12">
            <select class="form-select form-select-lg mb-3" aria-label="statusSelect">
                <option selected>...</option>
                <option value="1">Active</option>
                <option value="2">Waiting</option>
                <option value="3">Suspend</option>
              </select>
              
           </div>
        </form>
    </div>
</div>