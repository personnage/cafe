@extends('layouts.application')

@section('content')
    <div class="col-sm-9">
        <div class="row">
            <div class="typeHeader std-block col-lg-12">
                <h1>Новости и открытия, обзоры, интервью</h1>
            </div>
        </div>

        @foreach ($categories as $category)
            <div class="row">
                <div class="col-lg-12 typeBlock std-block">
                    <div class="typeImage pull-left">
                        <a href="{!! route('news.items.list', ['categoryName' => $category->name]) !!}">
                            <img src="http://placekitten.com/100/100" alt="{{ $category->title }}" />
                            {{--<img src="http://assets.allcafe.ru/{{ $category->image->name }}" alt="{{ $category->title }}" />--}}
                        </a>
                    </div>
                    <div class="info">
                        <a href="{!! route('news.items.list', ['categoryName' => $category->name]) !!}">
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
