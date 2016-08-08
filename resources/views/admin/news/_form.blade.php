@include('admin.shared._alert')

<form method="POST" action="{{ url('admin/news', $news->id) }}" role="form" class="form-horizontal" accept-charset="utf-8" autocomplete="off">
  {{ csrf_field() }}

  @if($news->exists)
  {{ method_field('PATCH') }}
  @endif


  <div class="form-group">
    @if($news->exists)
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default">Save changes</button>
      </div>
    @else
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-default">Create news</button>
      </div>
    @endif

    <div class="col-sm-offset-2 col-sm-4">
      <a href="{{ url('admin/news') }}" class="btn btn-default">Cancel</a>
    </div>
  </div>
</form>
