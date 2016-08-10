{{--add support tinymce --}}
@push('scripts')
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush

@include('admin.common._alert')

<form method="POST" action="{{ url('admin/news', $news->id) }}" role="form" class="form-horizontal" accept-charset="utf-8" autocomplete="off">
  {{ csrf_field() }}

  @if($news->exists)
  {{ method_field('PATCH') }}
  @endif

  <fieldset>
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <label for="name" class="col-sm-2 control-label">Name</label>
      <div class="col-sm-10">
        <input type="text" name="name" value="{{ old('name', $news->name) }}" id="name" class="form-control" placeholder="Name" autocomplete="off" required>
        @if ($errors->has('name'))
          <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
          </span>
        @endif
      </div>
    </div>
  </fieldset>

  <fieldset>
    <h2>Content</h2>

    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
      <label for="title" class="col-sm-2 control-label">Title</label>
      <div class="col-sm-10">
        <input type="text" name="title" value="{{ old('title', $news->title) }}" id="title" class="form-control" placeholder="Header (H1) (if not exist, name will be used)" autocomplete="off">
        @if ($errors->has('title'))
          <span class="help-block">
              <strong>{{ $errors->first('title') }}</strong>
          </span>
        @endif
      </div>
    </div>

    <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
      <label class="col-sm-2 control-label">Category</label>
      <div class="col-sm-10">
        <select id="select-category-to-news" name="category" class="form-control" placeholder="Select a category...">
          @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->title }}</option>
          @endforeach
        </select>
        @if ($errors->has('category'))
            <span class="help-block">
                <strong>{{ $errors->first('category') }}</strong>
            </span>
        @endif
      </div>
    </div>

    <div class="form-group{{ $errors->has('announcement') ? ' has-error' : '' }}">
      <label for="announcement" class="col-sm-2 control-label">Announcement</label>
      <div class="col-sm-10">

        <textarea class="implement-html-editor" name="announcement" id="announcement">
          {{ old('announcement', $news->announcement) }}
        </textarea>

        @if ($errors->has('announcement'))
            <span class="help-block">
                <strong>{{ $errors->first('announcement') }}</strong>
            </span>
        @endif
      </div>
    </div>

    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
      <label for="body" class="col-sm-2 control-label">Body</label>
      <div class="col-sm-10">

        <textarea class="implement-html-editor" name="body" id="body" rows="10">
          {{ old('body', $news->body) }}
        </textarea>

        @if ($errors->has('body'))
            <span class="help-block">
                <strong>{{ $errors->first('body') }}</strong>
            </span>
        @endif
      </div>
    </div>
  </fieldset>

  <fieldset>
    <h2>Options</h2>

    <div class="form-group">
      <label for="comments_allowed" class="col-sm-2 control-label">Comments allowed</label>
      <div class="col-sm-10">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="comments_allowed" id="comments_allowed"
              @if(old('comments_allowed', $news->comments_allowed)) checked @endif
            > Ok
          </label>
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <h2>Publication</h2>

    <div class="form-group">
      <label for="published" class="col-sm-2 control-label">Allow</label>
      <div class="col-sm-3">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="published" id="published"
              @if(old('published', $news->published)) checked @endif
            > Ok
          </label>
        </div>
      </div>

      <label for="published_since" class="col-sm-2 control-label">Since</label>
      <div class="col-sm-5">
        <input type="text" name="published_since" value="{{ old('published_since', $news->published_since) }}" id="published_since" class="form-control" placeholder="published_since" autocomplete="off">
        @if ($errors->has('published_since'))
          <span class="help-block">
              <strong>{{ $errors->first('published_since') }}</strong>
          </span>
        @endif
      </div>
    </div>
  </fieldset>

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
