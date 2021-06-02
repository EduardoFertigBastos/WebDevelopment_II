@if (session()->has('messages'))    
    <div class="alert alert-success mx-auto mb-3 text-success form-row justify-content-center col-sm-8 col-md-10 col-lg-9" role="alert">
        {{ session()->get('messages') }}
    </div>
@endif