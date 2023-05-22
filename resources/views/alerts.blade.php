<div class="row">
    <div class="col-md-6">
@if (Session::has('success'))
    <div class="alert alert-success border-0 bg-success alert-dismissible fade show">
        <div class="text-white">{!! Session::get('success') !!}</div>
        <button type="button" class="btn-close btn-alert-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (Session::has('delete'))
    <div class="alert alert-secondary border-0 bg-secondary alert-dismissible fade show">
        <div class="text-white">{!! Session::get('delete') !!}</div>
        <button type="button" class="btn-close btn-alert-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
        <div class="text-white">{!! Session::get('error') !!}</div>
        <button type="button" class="btn-close btn-alert-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
</div> 
 </div>