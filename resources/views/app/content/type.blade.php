@extends('layouts.application')

@section('content')
    <div class="col-sm-9">
        <div class="row">
            <div class="typeHeader std-block col-lg-12">
                <h1>{{ $typeTitle }}</h1>
            </div>
        </div>

        @foreach ($categories as $category)
            <div class="row">
                <div class="col-lg-12 typeBlock std-block">
                    <div class="typeImage pull-left">
                        <a href="{{ url("news/{$category->name}") }}">
                            {{--<img src="http://assets.allcafe.ru/{{ $category->image->name }}" alt="{{ $category->title }}" />--}}
                            <img src="http://placekitten.com/100/100" />
                        </a>
                    </div>
                    <div class="info">
                        <a href="{{ url("news/{$category->name}") }}">
                            <h2>{{ $category->title }}</h2>
                        </a>
                        <p>{{ $category->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @include('app.shared._sidebar')
@endsection
