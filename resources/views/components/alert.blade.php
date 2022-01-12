@if ($message = Session::get('success'))
  <div class="alert  alert-success alert-dismissible fade show" role="alert">
    <span class="badge badge-pill badge-success">Success</span> {{ $message}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
@endif

@if ($message = Session::get('error'))
<div class="alert  alert-danger alert-dismissible fade show" role="alert">
    <span class="badge badge-pill badge-danger">Warning</span> {{ $message}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
@endif