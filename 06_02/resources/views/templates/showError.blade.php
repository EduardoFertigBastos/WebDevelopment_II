@if(session()->has('error'))
    <div class="alert alert-danger mx-auto mb-3 text-danger form-row justify-content-center col-sm-8 col-md-10 col-lg-9" role="alert">
        {{ session()->get('error') }}
    </div>
@endif