@extends('layouts.application')

@section('content')
<div id="container">
  <div id="map-main" class="mapMain col-xs-12">
    <div class="col-lg-10 col-xs-12 citiesBlock">
      <p>Поиск ресторанов в вашем городе:</p>

      <div class="main-cities col-xs-12 no-padding">
        @foreach($city->mainCities() as $city)
          <a href="{{ route('home', $city->domain) }}">{{ $city->name }}</a>
        @endforeach
      </div>

      <div class="big-cities col-xs-12 no-padding">
        @foreach($city->bigCities() as $city)
          <a href="{{ route('home', $city->domain) }}">{{ $city->name }}</a>
        @endforeach
      </div>

      <div class="other-cities col-xs-12 no-padding">
        @foreach($city->littleCities() as $city)
          <a href="{{ route('home', $city->domain) }}">{{ $city->name }}</a>
        @endforeach
      </div>

    </div>
    <div class="col-lg-2 hidden-xs text-center mapMain__logo">
      <div class="info">
        <img src="{{ asset('assets/img/app/main/allcafe_flat.png') }}" alt="">
        <p id="allcafe">allcafe</p>
        <p>Все рестораны и кафе в вашем городе<em>!</em></p>
      </div>
    </div>
    <div class="other-countries row col-xs-12">
      <p>Другие страны:</p>

      @foreach($city->europeCities() as $city)
        <a href="{{ route('home', $city->domain) }}">
          <img src="{{ asset(sprintf('assets/img/app/main/%s.png', $city->domain)) }}"> {{ $city->name }}
        </a>
      @endforeach

      <div class="pull-right hidden-xs">
        <a target="_blank" href="https://itunes.apple.com/ru/app/allcafe/id470035370?mt=8" id="appStore"></a>
        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.komandor.allcafe" id="googlePlay"></a>
      </div>
    </div>
  </div>
</div>

@include('app.shared._news-block')
@include('app.shared._article-block')
@overwrite