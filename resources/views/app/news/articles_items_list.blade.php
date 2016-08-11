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
              <div class="clearfix"></div>
              <div class="intro-text">{!! $categoryDescription !!}</div>
          </div>
      </div>
      <div class="row">
          @foreach ($items as $item)
              <div class="col-xs-12 newsItem std-block no-padding">
                  <div class="newsItem__info col-xs-12">
                      <div class="info-img col-xs-3 no-padding">
                          <a href="{!! $item->url() !!}">
                              <img class="img-responsive" src="http://assets.allcafe.ru/pic/news2/260x194/3c73ec6217c142dd4b88935dbd88929569bc4118.jpeg" alt="Розыгрыш велосипедов Shulz в ресторане «Двор Помидор»">
                          </a>
                      </div>
                      <div class="info col-xs-9">

                          <time>{{ $item->getPublishedDateTime() }}</time>

                          <a class="title" href="{!! $item->url() !!}">{{ $item->title }}</a>

                          <p class="hidden-sm hidden-xs">{!! $item->announcement !!}</p>

                          <div class="tagsBlock">
                              Теги:
                              <a href="http://spb.allcafe.ru/search2/tags/с велосипедом" class="tagsBlock__item"><span>с велосипедом</span></a>
                          </div>
                      </div>
                  </div>
                  <div class="newsItem__tail col-xs-12">
                      <div class="row">
                          <div class="col-lg-4 col-md-3 hidden-sm hidden-xs">
                              <a class="star no-border" href="{{ url('news/total/2016/07/08/rozygrysh-velosipedov-shulz-v-restorane-dvor-pomidor') }}"><span>0</span></a>
                              <a class="recommend no-border" href="{{ url('news/total/2016/07/08/rozygrysh-velosipedov-shulz-v-restorane-dvor-pomidor') }}"><span>0</span></a>
                          </div>
                          <div class="socialBlock col-lg-4 col-md-5 col-sm-12">
                              <div class="col-lg-4 col-md-4 col-sm-2 col-xs-4">
                                  <span>поделиться:</span>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-10 col-xs-8">
                                  <a class="facebook" target="_blank" href="https://www.facebook.com/dialog/share?app_id=1651455521775390&amp;redirect_uri=https://www.facebook.com/&amp;picture=http%3A%2F%2Fassets.allcafe.ru%2Fpic%2Fnews2%2F260x194%2F3c73ec6217c142dd4b88935dbd88929569bc4118.jpeg&amp;caption=%D0%A0%D0%BE%D0%B7%D1%8B%D0%B3%D1%80%D1%8B%D1%88%20%D0%B2%D0%B5%D0%BB%D0%BE%D1%81%D0%B8%D0%BF%D0%B5%D0%B4%D0%BE%D0%B2%20Shulz%20%D0%B2%20%D1%80%D0%B5%D1%81%D1%82%D0%BE%D1%80%D0%B0%D0%BD%D0%B5%20%C2%AB%D0%94%D0%B2%D0%BE%D1%80%20%D0%9F%D0%BE%D0%BC%D0%B8%D0%B4%D0%BE%D1%80%C2%BB&amp;description=%D0%9D%D0%9F%D0%A0.%20%D0%A0%D0%B5%D1%81%D1%82%D0%BE%D1%80%D0%B0%D0%BD%20%26laquo%3B%D0%94%D0%B2%D0%BE%D1%80%20%D0%9F%D0%BE%D0%BC%D0%B8%D0%B4%D0%BE%D1%80%26raquo%3B%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BB%D0%B0%D0%B3%D0%B0%D0%B5%D1%82%20%D1%81%D0%B2%D0%BE%D0%B8%D0%BC%20%D0%B3%D0%BE%D1%81%D1%82%D1%8F%D0%BC%20%D0%BF%D1%80%D0%B8%D0%BD%D1%8F%D1%82%D1%8C%20%D1%83%D1%87%D0%B0%D1%81%D1%82%D0%B8%D0%B5%20%D0%B2%20%D1%80%D0%BE%D0%B7%D1%8B%D0%B3%D1%80%D1%8B%D1%88%D0%B5%20%D1%81%D1%80%D0%B0%D0%B7%D1%83%20%D0%B4%D0%B2%D1%83%D1%85%20%D0%B2%D0%B5%D0%BB%D0%BE%D1%81%D0%B8%D0%BF%D0%B5%D0%B4%D0%BE%D0%B2%20Shulz%2C%20%D0%BA%D0%BE%D1%82%D0%BE%D1%80%D1%8B%D0%B5%20%D0%BF%D0%BE%D0%BC%D0%BE%D0%B3%D1%83%D1%82%20%D0%B2%D0%B0%D0%BC%20%D0%BE%D1%80%D0%B3%D0%B0%D0%BD%D0%B8%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D1%8C%20%D1%81%D0%BF%D0%BE%D1%80%D1%82%D0%B8%D0%B2%D0%BD%D1%8B%D0%B9%20%D0%B8%20%D0%B2%D0%B5%D1%81%D0%B5%D0%BB%D1%8B%D0%B9%20%D0%B4%D0%BE%D1%81%D1%83%D0%B3%20%D0%B4%D0%BB%D1%8F%20%D0%B2%D1%81%D0%B5%D0%B9%20%D1%81%D0%B5%D0%BC%D1%8C%D0%B8.%0D%0A&amp;href=http%3A%2F%2Fspb.allcafe.ru%2Fnews%2Ftotal%2F2016%2F07%2F08%2Frozygrysh-velosipedov-shulz-v-restorane-dvor-pomidor"></a>
                                  <a class="vk" target="_blank" href="http://vk.com/share.php?description=НПР. Ресторан &amp;laquo;Двор Помидор&amp;raquo; предлагает своим гостям принять участие в розыгрыше сразу двух велосипедов Shulz, которые помогут вам организовать спортивный и веселый досуг для всей семьи.&#10;&amp;url=http%3A%2F%2Fspb.allcafe.ru%2Fnews%2Ftotal%2F2016%2F07%2F08%2Frozygrysh-velosipedov-shulz-v-restorane-dvor-pomidor&amp;title=Розыгрыш велосипедов Shulz в ресторане «Двор Помидор»&amp;image=http://assets.allcafe.ru/pic/news2/260x194/3c73ec6217c142dd4b88935dbd88929569bc4118.jpeg"></a>
                                  <a class="twitter" target="_blank" href="https://twitter.com/share?text=Розыгрыш велосипедов Shulz в ресторане «Двор Помидор»&amp;url=http%3A%2F%2Fspb.allcafe.ru%2Fnews%2Ftotal%2F2016%2F07%2F08%2Frozygrysh-velosipedov-shulz-v-restorane-dvor-pomidor"></a>
                                  <a class="mail mrc__plugin_uber_like_button" target="_blank" href="http://connect.mail.ru/share" data-mrc-config="{'nc' : '1', 'nt' : '1', 'cm' : '1', 'sz' : '20', 'st' : '3', 'tp' : 'mm'}"></a>
                              </div>
                          </div>
                          <div class="col-lg-4 text-right hidden-sm hidden-xs">
                              <a class="dashed xhr mine" href="http://spb.allcafe.ru/news/total/2016/07/08/rozygrysh-velosipedov-shulz-v-restorane-dvor-pomidor">
                              <span class="add">
                                добавить в мой AllCafe
                              </span>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          @endforeach
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
