@extends('layouts.application')

@section('content')
    <div class="col-md-9 col-xs-12">
        <div class="row">
            <div class="typeHeader articleHeader std-block col-lg-12 no-padding">
                <h1>
                    Колонка ресторанного критика
                    <a href="?oh-act=edit" title="изменить">
                        <img width="16" height="16" alt="изменить" src="http://assets.allcafe.ru/icons/16/edit.png" class="manage">
                    </a>
                    <a href="javascript:;" title="сортировать">
                        <img width="16" height="16" alt="сортировать" src="http://assets.allcafe.ru/icons/16/light.png" class="manage sort">
                    </a>
                    <a href="?oh-act=add" title="добавить">
                        <img width="16" height="16" alt="добавить" src="http://assets.allcafe.ru/icons/16/plus.png" class="manage">
                    </a>
                    <a href="?oh-act=delete-page" class="confirm" title="удалить">
                        <img width="16" height="16" alt="удалить" src="http://assets.allcafe.ru/icons/16/trash.png" class="manage">
                    </a>
                </h1>

                <div class="articleHeader__info">
                    <p style="text-align: center;"><strong>Авторская колонка Бориса</strong></p>

                    <p style="text-align: center;">&nbsp;</p>

                    <p style="text-align:justify"><img alt="" src="http://allcafe.ru/s/pic/Boris.jpeg" style="float:left; height:100px; margin-left:5px; margin-right:5px; width:100px">Здравствуйте. Приветствую. В Колонке. Но, считайте это блогом по сути происходящего. За 11 лет и 2150 рецензий сменилось многое, но осталось лишь главное - желание, чтобы обо мне судили по работе, по статьям. Как я со своей стороны, стараюсь судить рестораны, а не создателей. Колонка ресторанного критика. Так написано вверху. Не более того. Мнение одного человека, субъективное. Другого не бывает. Колумнистом быть удобно - есть окружение, есть возможность сравнить, есть история, весь опыт наружу. Предупреждаю, часто вопросов будет больше, чем ответов. Тут будут и рецензии, и все, что вокруг, возможно, попытка аналитики, наверное, неуклюжая, заграничный опыт, Хельсинки и Таллин, как два города, где я могу подробно рассказать про несколько десятков ресторанов. В отдельную выделена Колонка моих <a href="http://msk.allcafe.ru/news/boris-critic">«Путешествий из Петербурга в Москву»</a>: милости просим, на наши пятницы! Этой же колонке, исполнилось 10 лет в мае 2014. Не означает изменения моего статуса по отношению к редакции Allcafe. Политика прежняя - сохранение независимости. Пусть так и будет. Обсуждайте, комментируйте, спорьте, не соглашайтесь. И я буду не соглашаться. Главное, спорить об одном и том же. О ресторанах. И, конечно, спасибо Спонсорам - проект живет благодаря вам.</p>

                    <p style="text-align:right"><a href="http://allcafe.ru/community/users/6">Борис</a>.<br>
                        Подписываюсь двухтысячный раз. Спасибо что терпите.</p>

                    <p>&nbsp;</p>

                    <p><em>Мнение редакции <a href="http://spb.allcafe.ru">Allcafe</a> не всегда совпадает с мнением автора (примечание редакции)</em></p>

                    <p>&nbsp;</p>

                    <p style="text-align:center"><strong><a href="{{ url("news/boris/stars") }}"><img alt="" src="http://allcafe.ru/s/pic/Boris/3_Stars15.jpg" style="height:15px; width:40px"> или <img alt="" src="http://allcafe.ru/s/pic/Boris/1_Stars15.jpg" style="height:15px; width:14px"> - разъяснение оценок Бориса</a></strong></p>
                </div>

                <div class="newsItem__tail">
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
        </div>
        <div class="row">
            <div class="col-xs-12 newsItem articleItem std-block no-padding">
                <div class="newsItem__info col-xs-12">
                    <div class="info-img col-xs-2 no-padding">
                        <a href="{{ url('news/boris/bistronomika') }}">
                            <img class="img-responsive" src="http://assets.allcafe.ru/pic/pages/160x160/bb695a12ea29ccd38fcb7276f0b55fc61dde1dbc.jpeg?5-c56500d7275bcfb457f770b1aee47b9a" alt="Колонка ресторанного критика: кафе «Bistronomika»">
                        </a>
                    </div>
                    <div class="info col-xs-10">

                        <a href="{{ url("news/boris/bistronomika") }}" class="title">
                            Колонка ресторанного критика: кафе «Bistronomika»
                        </a>
                        <p style="margin-top: 15px; margin-left: 10px;"></p>
                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%">
                            <tbody>
                            <tr>
                                <td><strong>Рейтинг:</strong> <img alt="" src="http://allcafe.ru/s/pic/Boris/0_Stars.gif" style="height:23px; width:23px"></td>
                                <td style="text-align:right; white-space:nowrap"><em><span style="color:#696969;">8 июля 2016 года</span> &nbsp; &nbsp; </em></td>
                            </tr>
                            </tbody>
                        </table>

                        <p><br>
                            Очень частый вопрос «где поесть на площади Восстания», так что, не мог пропустить новое место.</p>
                        <p></p>
                        <div class="tagsBlock">
                            Теги:
                            <a href="http://spb.allcafe.ru/search2/tags/где поесть поздно ночью" class="tagsBlock__item"><span>где поесть поздно ночью</span></a>
                            <a href="http://spb.allcafe.ru/search2/tags/недалеко от вокзала" class="tagsBlock__item"><span>недалеко от вокзала</span></a>
                            <a href="http://spb.allcafe.ru/search2/tags/открытие 2016" class="tagsBlock__item"><span>открытие 2016</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 newsItem articleItem std-block no-padding">
                <div class="newsItem__info col-xs-12">
                    <div class="info-img col-xs-2 no-padding">
                        <a href="{{ url('news/boris/susanin-house') }}">
                            <img class="img-responsive" src="http://assets.allcafe.ru/pic/pages/160x160/618aa77f2f1248729151eb572c81df70d2a5eea8.jpeg?5-96dff53dbe5bc053170e73a1921eaddc" alt="Путешествия ресторанного критика. Кострома, кафе «Сусанин House»">
                        </a>
                    </div>
                    <div class="info col-xs-10">

                        <a href="{{ url('news/boris/susanin-house') }}" class="title">
                            Путешествия ресторанного критика. Кострома, кафе «Сусанин House»
                        </a>
                        <p style="margin-top: 15px; margin-left: 10px;"></p><table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%">
                            <tbody>
                            <tr>
                                <td><strong>Рейтинг:</strong> <img alt="" src="http://allcafe.ru/s/pic/Boris/1_Stars.jpg" style="height: 23px; width: 22px;"></td>
                                <td style="text-align:right; white-space:nowrap"><em><span style="color:#696969;">7 июля 2016 года</span> &nbsp; &nbsp; </em></td>
                            </tr>
                            </tbody>
                        </table>

                        <p>Хорошее кафе, много детского крика, много вкусного, предельно, даже остросюжетно дешево, вам надо глянуть.</p>
                        <p></p>

                        <div class="personsBlock">
                            Автор:
                            <a href="http://spb.allcafe.ru/search2/authors/Ресторанный критик Борис" class="personsBlock__item">
                                <span>Ресторанный критик Борис</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 newsItem articleItem std-block no-padding">
                <div class="newsItem__info col-xs-12">
                    <div class="info-img col-xs-2 no-padding">
                        <a href="{{ url('news/boris/bistronomika') }}">
                            <img class="img-responsive" class="img-responsive" src="http://assets.allcafe.ru/pic/pages/160x160/bb695a12ea29ccd38fcb7276f0b55fc61dde1dbc.jpeg?5-c56500d7275bcfb457f770b1aee47b9a" alt="Колонка ресторанного критика: кафе «Bistronomika»">
                        </a>
                    </div>
                    <div class="info col-xs-10">

                        <a href="{{ url("news/boris/bistronomika") }}" class="title">
                            Колонка ресторанного критика: кафе «Bistronomika»
                        </a>
                        <p style="margin-top: 15px; margin-left: 10px;"></p>
                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%">
                            <tbody>
                            <tr>
                                <td><strong>Рейтинг:</strong> <img alt="" src="http://allcafe.ru/s/pic/Boris/0_Stars.gif" style="height:23px; width:23px"></td>
                                <td style="text-align:right; white-space:nowrap"><em><span style="color:#696969;">8 июля 2016 года</span> &nbsp; &nbsp; </em></td>
                            </tr>
                            </tbody>
                        </table>

                        <p><br>
                            Очень частый вопрос «где поесть на площади Восстания», так что, не мог пропустить новое место.</p>
                        <p></p>
                        <div class="tagsBlock">
                            Теги:
                            <a href="http://spb.allcafe.ru/search2/tags/где поесть поздно ночью" class="tagsBlock__item"><span>где поесть поздно ночью</span></a>
                            <a href="http://spb.allcafe.ru/search2/tags/недалеко от вокзала" class="tagsBlock__item"><span>недалеко от вокзала</span></a>
                            <a href="http://spb.allcafe.ru/search2/tags/открытие 2016" class="tagsBlock__item"><span>открытие 2016</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 newsItem articleItem std-block no-padding">
                <div class="newsItem__info col-xs-12">
                    <div class="info-img col-xs-2 no-padding">
                        <a href="{{ url('news/boris/susanin-house') }}">
                            <img class="img-responsive" src="http://assets.allcafe.ru/pic/pages/160x160/618aa77f2f1248729151eb572c81df70d2a5eea8.jpeg?5-96dff53dbe5bc053170e73a1921eaddc" alt="Путешествия ресторанного критика. Кострома, кафе «Сусанин House»">
                        </a>
                    </div>
                    <div class="info col-xs-10">

                        <a href="{{ url('news/boris/susanin-house') }}" class="title">
                            Путешествия ресторанного критика. Кострома, кафе «Сусанин House»
                        </a>
                        <p style="margin-top: 15px; margin-left: 10px;"></p><table align="left" border="0" cellpadding="0" cellspacing="0" style="width:100%">
                            <tbody>
                            <tr>
                                <td><strong>Рейтинг:</strong> <img alt="" src="http://allcafe.ru/s/pic/Boris/1_Stars.jpg" style="height: 23px; width: 22px;"></td>
                                <td style="text-align:right; white-space:nowrap"><em><span style="color:#696969;">7 июля 2016 года</span> &nbsp; &nbsp; </em></td>
                            </tr>
                            </tbody>
                        </table>

                        <p>Хорошее кафе, много детского крика, много вкусного, предельно, даже остросюжетно дешево, вам надо глянуть.</p>
                        <p></p>

                        <div class="personsBlock">
                            Автор:
                            <a href="http://spb.allcafe.ru/search2/authors/Ресторанный критик Борис" class="personsBlock__item">
                                <span>Ресторанный критик Борис</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

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