@if(session('notice'))
<div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <div>
    <i class="fa fa-info-circle" aria-hidden="true"></i>
    <p>{{ session('notice') }}</p>
  </div>
</div>
@endif

@if(session('success'))
<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <div>
    <i class="fa fa-check-circle-o" aria-hidden="true"></i>
    <p>{{ session('success') }}</p>
  </div>
</div>
@endif

@if(session('warning'))
<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <div>
    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
    <p>{{ session('warning') }}</p>
  </div>
</div>
@endif

@if(session('alert'))
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <div>
    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
    <p>{{ session('alert') }}</p>
  </div>
</div>
@endif
