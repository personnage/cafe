@extends('layouts.application')

@section('content')
  <div class="col-sm-9">
      <div class="row">
          <div class="typeHeader std-block col-xs-12">
              <h1 class="col-lg-8 col-sm-12">{{ $categoryTitle }}</h1>
              <div class="col-lg-4 col-xs-12 subscribeBlock no-padding">
                  <span class="col-xs-3 no-padding">Подписка:</span>
                  <div class="subscribeBlock__buttons col-xs-3 no-padding">
                      <a class="mail" data-subscrtype="all" href="http://spb.allcafe.ru/news/total"></a>
                      <a class="twitter" href="http://twitter.com/allcaferu_news"></a>
                      <a class="share" href="http://feeds.feedburner.com/spballcaferu_news"></a>
                  </div>
                  <p class="subscribeBlock__send col-xs-6 text-right">
                      <a href="http://allcafe.ru/community/lk#news" style="color: #777;">Прислать новость</a>
                  </p>
              </div>
          </div>
      </div>
      <div class="row">
          @include('app.news._news_item')
      </div>
      <div class="row">
          {{--<div class="col-lg-12 pagination">--}}
              {{--<span class="pagination__pagenum">1</span>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-2" class="pagination__pagenum">2</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-3" class="pagination__pagenum">3</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-4" class="pagination__pagenum">4</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-5" class="pagination__pagenum">5</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-6" class="pagination__pagenum">6</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-7" class="pagination__pagenum">7</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-8" class="pagination__pagenum">8</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-9" class="pagination__pagenum">9</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-10" class="pagination__pagenum">10</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-11" class="pagination__pagenum">11</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-12" class="pagination__pagenum">12</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-13" class="pagination__pagenum">13</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-14" class="pagination__pagenum">14</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-15" class="pagination__pagenum">15</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-16" class="pagination__pagenum">16</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-17" class="pagination__pagenum">17</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-18" class="pagination__pagenum">18</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-19" class="pagination__pagenum">19</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-20" class="pagination__pagenum">20</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-21" class="pagination__pagenum">21</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-22" class="pagination__pagenum">22</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-23" class="pagination__pagenum">23</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-24" class="pagination__pagenum">24</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-25" class="pagination__pagenum">25</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-26" class="pagination__pagenum">26</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-27" class="pagination__pagenum">27</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-28" class="pagination__pagenum">28</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-29" class="pagination__pagenum">29</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-30" class="pagination__pagenum">30</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-31" class="pagination__pagenum">31</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-32" class="pagination__pagenum">32</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-33" class="pagination__pagenum">33</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-34" class="pagination__pagenum">34</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-35" class="pagination__pagenum">35</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-36" class="pagination__pagenum">36</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-37" class="pagination__pagenum">37</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-38" class="pagination__pagenum">38</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-39" class="pagination__pagenum">39</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-40" class="pagination__pagenum">40</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-41" class="pagination__pagenum">41</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-42" class="pagination__pagenum">42</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-43" class="pagination__pagenum">43</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-44" class="pagination__pagenum">44</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-45" class="pagination__pagenum">45</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-46" class="pagination__pagenum">46</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-47" class="pagination__pagenum">47</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-48" class="pagination__pagenum">48</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-49" class="pagination__pagenum">49</a>--}}
              {{--<a href="//spb.allcafe.ru/news/total/listpage-50" class="pagination__pagenum">50</a>--}}
          {{--</div>--}}
          <div class="col-xs-12 text-center pagination">
              <a class="pagination__button pagination__button__active">Вперед</a>
              <a class="pagination__button">Назад</a>
          </div>
      </div>
  </div>

  @include('app.shared._sidebar')

@overwrite
