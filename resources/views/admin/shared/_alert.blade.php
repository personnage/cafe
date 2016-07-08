<style>
  .alert.alert-dismissible .material-icons {
    vertical-align: middle;
  }
  .alert.alert-dismissible .material-icons + p {
    display: inline-block;
    margin: 0 0 0 5px;
    vertical-align: middle;
  }
</style>

@if(session('notice'))
<div class="alert alert-dismissible alert-info">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <div>
    <i class="material-icons">info_outline</i>
    <p>{{ session('notice') }}</p>
  </div>
</div>
@endif

@if(session('success'))
<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <div>
    <i class="material-icons">done</i>
    <p>{{ session('success') }}</p>
  </div>
</div>
@endif

@if(session('warning'))
<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <div>
    <i class="material-icons">warning</i>
    <p>{{ session('warning') }}</p>
  </div>
</div>
@endif

@if(session('alert'))
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <div>
    <i class="material-icons">error_outline</i>
    <p>{{ session('alert') }}</p>
  </div>
</div>
@endif
