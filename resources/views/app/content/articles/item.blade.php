@extends('layouts.application')

@section('content')

    <div class="col-md-9 col-xs-12">
        <div class="row">
            <div class="itemBlock col-xs-12 std-block no-padding">
                <div class="col-xs-12 itemBlock__head articleBlock__head">
                    <h1>
                        Колонка ресторанного критика: кафе «Bistronomika»
                        <a href="?oh-act=edit" title="изменить">
                            <img width="16" height="16" alt="изменить" src="http://assets.allcafe.ru/icons/16/edit.png" class="manage">
                        </a>
                        <a href="?oh-act=add" title="добавить">
                            <img width="16" height="16" alt="добавить" src="http://assets.allcafe.ru/icons/16/plus.png" class="manage">
                        </a>
                        <a href="?oh-act=delete-page" class="confirm" title="удалить">
                            <img width="16" height="16" alt="удалить" src="http://assets.allcafe.ru/icons/16/trash.png" class="manage">
                        </a>                </h1>

                    <div class="info">
                        <div class="personsBlock">
                            Автор:
                            <a href="http://spb.allcafe.ru/search2/authors/Ресторанный критик Борис" class="personsBlock__item">
                                <span>Ресторанный критик Борис</span>
                            </a>
                        </div>
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
            <div class="itemBlock articleBlock col-xs-12 std-block no-padding">
                <div class="itemBlock__body">
                    <table align="left" border="0" cellpadding="0" cellspacing="1" style="width:100%">
                        <tbody>
                        <tr>
                            <td><strong>Рейтинг:</strong> <img alt="" src="http://allcafe.ru/s/pic/Boris/0_Stars.gif" style="height:23px; width:23px"></td>
                            <td style="text-align:right; white-space:nowrap"><em><span style="color:#696969;">8 июля 2016 года</span>&nbsp;&nbsp;&nbsp;&nbsp; </em></td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="address left">
                        <p style="text-align:justify"><a href="http://spb.allcafe.ru/restaurants/id-7701"><strong>Кафе-ресторан «Bistronomika»</strong></a></p>

                        <hr>
                        <ul>
                            <li style="text-align:justify">Санкт-Петербург, Невский пр., 120</li>
                        </ul>
                    </div>

                    <p style="text-align: justify;">Очень частый вопрос <strong>«где поесть на площади Восстания»</strong>, так что, не мог пропустить новое место. Тем более, недорогое, судя по сайту, и не стыдное на вид, судя по сайту. Мне, по совершенно непонятной причине, рисовалось что-то типа <a href="http://msk.allcafe.ru/restaurants/babetta">«Babetta&nbsp;Cafe»</a> на Мясницкой в <a href="http://msk.allcafe.ru/">Москве</a>. Возможно, это подсознательное: мне хотелось бы видеть что-то такое в этой части города. Своего города. Добра желаю.</p>

                    <p style="text-align: justify;"><img alt="" src="http://assets.allcafe.ru/pic/Boris/!_2016/2016_07/%D0%91%D0%B8%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0-1.jpg" style="width: 100%;"></p>

                    <p style="text-align: justify;">Хостес номер один в городе. Стоит, гордая такая, почти как <a href="http://spb.allcafe.ru/restaurants/groups/ginza-project-spb">ГП</a>.</p>

                    <p style="text-align: justify;">- Здравствуйте.</p>

                    <p style="text-align: justify;">- Здравствуйте.</p>

                    <p style="text-align: justify;">Молчит. Ее тут поставили же... Видимо, есть причина.</p>

                    <p style="text-align: justify;">- А куда сесть?</p>

                    <p style="text-align: justify;">- А вы по обеденному или по меню?</p>

                    <p style="text-align: justify;">- По меню, а есть разница, куда сесть?</p>

                    <p style="text-align: justify;">- Нет.</p>

                    <p style="text-align: justify;">- Тогда выбирайте. Сами выбирайте.</p>

                    <p style="text-align: justify;">Я в вопросах остался. Зачем «Оно» тут, что делает, зачем спрашивает, если нет разницы? Можно было спросить, какого цвета трусы у меня. Толку столько же. Отгонять бомжей? Так другой типаж нужен, с бицухой. На второй день - два официанта дежурят: без вопросов и без вопросов.</p>

                    <p style="text-align: justify;"><strong>Большой зал</strong> освободился от вони <a href="http://spb.allcafe.ru/restaurants/id-9718">шаурма-бистро</a>, что тут чадило целое десятилетие под разными названиями. Теперь зачем-то стойка огромная, без видимой деятельности, и крохотный бар, он же официантская станция в дальнем конце зала. Для бистро - хорошо, для кафе с официантами, а значит, с сервисом, слишком просто. Хотя, в тренде: не отпугнуть гостя случайного. Аккуратно, свеженько, даже по-модному, с лампочками «низкой напряженности»: и вдоль окна места, и диваны есть, кто любит, и традиционные столы. Жаль, кондиционера не слышно - душновато. Для среднего чека 1000 - нормально. Есть дешевые блюда, пельмени за 200 руб., например, но мы смотрим уровень цен по суши (110 руб.) и пицце кальцоне (550 руб. за 330 гр. «пирожок») - дороже многих специализированных заведений! Так что, настаиваю, 1000. Кофе 80 руб., вода от 90, панна 0.5 - 290.</p>

                    <p style="text-align: justify;"><img alt="" src="http://assets.allcafe.ru/pic/Boris/!_2016/2016_07/%D0%91%D0%B8%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0-2.jpg" style="width: 100%;"></p>

                    <p style="text-align: justify;">Сел. <strong>Официанты</strong> не подошли за десять минут. Хорошо, на соседнем столе нашлось меню. Начал. Странно: как стол выдерживает это <strong>меню</strong> - ничего хуже не видел - журнал собачка.ру толщиной и размером, все в нем, от пиццы и суши до пельменей и тартаров, с бургерами и лапшой, даже ризотто. Это смерть моя пришла. Зачем тут ризотто? Разумеется, готовить сотни блюд нельзя нормально, да и просто готовить - например, на обед в день будний, нет всего раздела пельменей. Прошло шесть дней - пельменей так и не слепили. Официанту глупо задавать вопросы: нельзя знать все блюда, не говоря уж про подробности. Официант, кстати, в стиле кафе. Заказ не повторяет, приносит чужой суп - нет, не мой - «простите, у нас небольшая путаница произошла». Наказан ожиданием в сорок минут. Я, не он. Так со всем. Счет даже, и тот со второго раза. «Забыл». Тут на кухню неча пенять. Вторая смена куда лучше. По крайней мере, человек не витает в облаках своих мыслей. И тут «пятерка» даже по ресторанной мерке.</p>

                    <p style="text-align: justify;">- Цезарь (320 руб.) - точно с ромейном?</p>

                    <p style="text-align: justify;">- Да, конечно.</p>

                    <p style="text-align: justify;">Впервые вижу пашот, когда желток, уже не хочет ножом выковыриваться, но еще не крошится. Это ладно. Соус забыли положить СОВСЕМ - нет и намека. Поэтому, только желток мог спасти это. А его и нет... Это: тонкие пластинки индейки, черри, действительно ромейн и сухари. Сухой салат и сухие сухарики с сухим белком - это перебор даже по мерке бистро. Не осилил, забрали, конечно, чуть меньше половины оставалось, хорошо, что с вопросом: «что с салатом не так?». Все не так, но все равно уносите.</p>

                    <p style="text-align: justify;"><div style="overflow: hidden; position: relative;"><img alt="" longdesc="Цезарь" src="http://assets.allcafe.ru/pic/Boris/!_2016/2016_07/%D0%91%D0%B8%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0-3.jpg" style="width: 100%;"><div class="longdesc"></div><span class="longdesc">Цезарь</span></div></p>

                    <p style="text-align: justify;">Тартар лосось на подушке авокадо (350 руб.) - порубленный лосось, вполне себе лосось, на подушке обычного майонезного салата с авокадо в составе. Наверное. В нем уже не отделить части. Если «Оливье» вам по душе, понравится и это. Я хотел лосося в виде тартар.</p>

                    <p style="text-align: justify;"><div style="overflow: hidden; position: relative;"><img alt="" longdesc="Тартар" src="http://assets.allcafe.ru/pic/Boris/!_2016/2016_07/%D0%91%D0%B8%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0-4.jpg" style="width: 100%;"><div class="longdesc"></div><span class="longdesc">Тартар</span></div></p>

                    <p style="text-align: justify;">Суп грибной (200 руб.) - сорок минут ожидания. Какой гость нормальный, в таком месте (а это не ресторан <a href="http://spb.allcafe.ru/restaurants/id-16869">«Мансарда»</a>, стоит напомнить), будет ждать и не уйдет? Покажите мне его. Самому до зеркала дойти? Да, правильно, только я. Сметану официант не принес вообще. Знаете, прекрасный суп, даром что в еврочашке. Не было бы нервотрепки, можно было с по-хорошему домашним таким сравнить. Душевностью.</p>

                    <p style="text-align: justify;"><div style="overflow: hidden; position: relative;"><img alt="" longdesc="Суп грибной" src="http://assets.allcafe.ru/pic/Boris/!_2016/2016_07/%D0%91%D0%B8%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0-5.jpg" style="width: 100%;"><div class="longdesc"></div><span class="longdesc">Суп грибной</span></div></p>

                    <p style="text-align: justify;">Сырный суп (190 руб.). Написано «сыр» в расшифровке состава. Из сыра состоит, не из сливок - не мог не купить. Ну что, резковат, конечно, грубоват, но съедобный. Если сливки и добавляли, нет их жирной мягкости. Без оценки. Ибо как оценивать, не знаю.</p>

                    <p style="text-align: justify;"><div style="overflow: hidden; position: relative;"><img alt="" longdesc="Сырный суп" src="http://assets.allcafe.ru/pic/Boris/!_2016/2016_07/%D0%91%D0%B8%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0-6.jpg" style="width: 100%;"><div class="longdesc"></div><span class="longdesc">Сырный суп</span></div></p>

                    <p style="text-align: justify;">Вместе с супом прибыла заказанная Свинина (370 руб.) - фото в меню, уж очень хорошее. Видимо (моя догадка, не могу утверждать), стояла под лампой лишние пятнадцать минут, пока суп переделывали. Потом на столе ждала, пока суп ем. Все это беда большого меню, кстати, три супа готовили бы лучше, качественнее и быстрее. О чем я говорил… Четыре бледных столбика на прямоугольной тарелке, как ролла куски. Смотрится... атасно. Вкус? Ну, свинина съедобная, хотя, столь простое мясо, надо было агрессивнее дополнять/приправлять. Холодный бекон, не понравится никому. Соус «блю чиз» съел повар, только грибная каша на «роликах-столбиках» и комок салата.</p>

                    <p style="text-align: justify;"><div style="overflow: hidden; position: relative;"><img alt="" longdesc="Свинина" src="http://assets.allcafe.ru/pic/Boris/!_2016/2016_07/%D0%91%D0%B8%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0-7.jpg" style="width: 100%;"><div class="longdesc"></div><span class="longdesc">Свинина</span></div></p>

                    <p style="text-align: justify;">Ризотто с грибами (300 руб.) - я не мог не взять проверочное блюдо. Если хорошо, можно простить все вышеперечисленное. Ну, я понимаю, что ризотто тут должно быть условное. Оно и есть такое. Густое, под вилку, а не под ложку, полное, рекордно полное, переполненное шампиньонами. Безвкусно, конечно. С другой стороны, я же понимаю, куда пришел. Рисом голым не накормили и хвалить? Но нет, ругать: в суп же нормальных грибов положили, а то стоит дешевле!</p>

                    <p style="text-align: justify;"><div style="overflow: hidden; position: relative;"><img alt="" longdesc="Ризотто с грибами" src="http://assets.allcafe.ru/pic/Boris/!_2016/2016_07/%D0%91%D0%B8%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0-8.jpg" style="width: 100%;"><div class="longdesc"></div><span class="longdesc">Ризотто с грибами</span></div></p>

                    <p style="text-align: justify;"><strong>Итого</strong>. В целом... писать сложно. Такие места нужны. Можно писать, что надо поменять повара, хостес, официантов... Все, кроме морса за 40 руб. Говорят - самодельного. Глупо писать, что надо поменять повара, хостес, официантов. Если все так работает, надо менять голову, первое лицо, Управляющим кличут или Гендиром. Даже для формата Бистро у Московского Вокзала с официантами и за 1000 руб. Зачем <a href="http://spb.allcafe.ru/restaurants/id-9718">шаверму</a> закрыли? Но шаверма тут тоже есть. И лапша, и стейк, и ланчи. Такие места очень нужны на площади. Но... не такие. Все верно, есть <a href="http://spb.allcafe.ru/restaurants/gastronomika">«Гастрономика»</a>, есть <a href="http://spb.allcafe.ru/restaurants/id-7701">«Бистрономика»</a>, где-то важнее гастро, где-то важнее быстро. Так ведь не быстро выходит... По субботам какие-то Препати - играют диджеи. Живые.</p>
                </div>
            </div>
        </div>
        @include('app.shared._last-news')
    </div>


    @include('app.shared._sidebar')
@overwrite