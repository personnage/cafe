@extends('layouts.application')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Welcome</div>

        <div class="panel-body">
          Your Application's Landing Page.
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1>Posts</h1>
    </div>
  </div>

  @foreach($posts as $post)
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="h3">{{ $post->title }}</div>
        <div class="lead">{{ $post->body }}</div>

        <div class="btn-group btn-group-sm pull-right" role="group">
          @can('edit-post', $post)
            <a href="#/edit" class="btn btn-success">Edit</a>
          @endcan

          @can('comment-post', $post)
            <a href="#/comment" class="btn btn-info">Comment</a>
          @endcan

          @can('delete-post')
            <a href="#/delete" class="btn btn-danger">Delete</a>
          @endcan
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <hr>
  @endforeach

</div>
@endsection
