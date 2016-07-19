@extends('layouts.application')

@section('content')
    <div class="col-md-9 -col-xs-12">
        <div class="row">
            <div class="std-block no-padding banket">
                <div class="row banket__head">
                    <div class="col-lg-12">
                        <h1>
                            Корпоративные праздники в ресторане «Русское застолье»
                        </h1>
                        <div class="info">
                            <div class="row">
                                <div class="col-lg-2">Место</div>
                                <div class="col-lg-10">
                                    <a href="http://spb.allcafe.ru/restaurants/id-11355">
                                        <strong>Ресторан «Русское Застолье»</strong>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">Адрес</div>
                                <div class="col-lg-10">
                                    <strong>Санкт-Петербург, Энгельса пр., 97</strong>
                                    <a href="http://spb.allcafe.ru/restaurants/id-11355/map" class="dashed">на карте</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">Телефон</div>
                                <div class="col-lg-10">
                                    <strong>+7 812 293-13-63, 935-69-04</strong>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">Сайт</div>
                                <div class="col-lg-10">
                                    <a target="_blank" href="http://www.zastolie.su">www.zastolie.su</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banket__tail row">
                    <div class="col-lg-12 no-padding">
                        <div class="col-lg-6">
                            <a href="#" class="dashed">сообщить об ошибке</a>
                        </div>
                        <div class="col-lg-6 text-right">
                            <a href="{{ url("restaurants/specials/1/edit-155") }}" class="btn-orange">Редактировать</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="infoBlock">
                <div class="banket__info std-block">
                    <h3>Описание</h3>
                    <p class="alignJustify">Настоящее богатство заключается не в накоплении материальных благ. Важно знать, что рядом есть верный друг и партнер, проверенный временем и поступками. Надежный соратник - это точка опоры в преодолении любых препятствий. Будем рады встретить Вас для празднования корпоратива. Надеемся, что праздничный вечер в кругу лучших друзей, партнеров и коллег станет для всех интересным и радостным событием!</p>
                    <p>К Вашим услугам два уютных зала, красивое оформление, прекрасная кухня и отличное обслуживание!</p>
                    <p class="alignJustify">По всем интересующим Вас вопросам мы можем проконсультировать по телефонам: 935-69-04; 293-13-63, по e-mail: <a href="mailto:zastolle@mail.ru">zastolle@mail.ru</a> или в группе <a href="http://vk.com/russkoezastolie">ВКонтакте</a></p>
                    <p class="alignJustify"><a href="http://spb.allcafe.ru/restaurants/id-11355"><strong>Ресторан «Русское Застолье»</strong></a><br>
                        Санкт-Петербург, Энгельса пр., 97<br>
                        Тел.: +7 (812) 935-69-04, 293-13-63<br>
                        Сайт: <a href="http://www.zastolie.su">www.zastolie.su</a><br>
                        <a href="http://spb.allcafe.ru/restaurants/id-11355/order-form">On-line бронирование столика</a></p>
                    <p class="alignJustify">Идеальный ресторан для Вашего праздника. Два просторных зала вместимостью по 30 и 50 человек, светлый классический интерьер, высокие потолки, придающие ресторану особую торжественность. Праздничную обстановку дополняют красивые скатерти и чехлы с бантами на стульях, зеркала, картины, вазы и цветы и оформление воздушными шарами.</p>
                    <p class="alignJustify">В ресторане угощают блюдами русской и европейской кухни, красивая подача блюд в сочетании с теплой атмосферой залов сделают любое событие не забываемым.</p>
                    <p class="alignJustify">Ресторан идеально подходит для любых праздников, будь то свадьба, юбилей, детский праздник или корпоратив. Мы поможем вам с организацией любого мероприятия, подберем тамаду, ведущего, артистов и оформление по любым вашим пожеланиям!<br>
                        Великолепное банкетное меню от 1300 рублей за гостя, на банкет разрешается приносить с собой спиртные напитки без дополнительной оплаты. Наш Шеф повар приготовит на заказ дополнительные блюда: запеченный осетр - 4200 р.;  фаршированный судак - 4500 р.; молочный поросенок - 10000 р;  домашний студень - 2900 р.</p>
                    <p class="alignJustify">Вступайте в нашу группу Вконтакте: <a href="http://vk.com/russkoezastolie">vk.com/russkoezastolie</a></p>
                    <p class="alignJustify">Скидки, бонусы, подарки:<br>
                        Саксофонист<br>
                        При заказе банкета ваших гостей встретит саксофонист, что придаст событию особую торжественность.</p>
                    <p class="alignJustify">Оформление зала<br>
                        Украшение шарами или цветами для свадьбы, юбилея или детского праздника в нашем ресторане. Чехлы, банты и фуршетные юбки входят в общую стоимость банкета.</p>
                    <p class="alignJustify">Зал в подарок!<br>
                        Закрытие зала в подарок при проведении банкетов.</p>
                    <p class="alignJustify">Алкоголь с собой<br>
                        При проведении банкета вы можете полностью принести свой алкоголь без дополнительной оплаты.</p>
                </div>
                <div class="banket__menu std-block">
                    <h3>Меню</h3>
                    <table width="650px" cellspacing="1" cellpadding="1" border="0">
                        <tbody>
                        <tr>
                            <td class="alignCenter" colspan="2">
                            <span style="font-size: 1.2em;">
                                <strong>Банкет за 1350 рублей на гостя (пн-вт-ср-чт)</strong>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>Выход</td>
                        </tr>
                        <tr>
                            <td><strong>Салаты:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Оливье</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Цезарь с курой</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Княжеский</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td><strong>Холодные закуски:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Селедочка с картофелем и лучком</td>
                            <td>85</td>
                        </tr>
                        <tr>
                            <td>Овощные рулетики</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Ассорти из овощей</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Рыбная нарезка</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Мясные деликатесы</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td><strong>Горячее блюдо (на выбор):</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>«Белая леди» (кура с овощами гриль + соус лечо)</td>
                            <td>220</td>
                        </tr>
                        <tr>
                            <td>«Кочевник» (Эскалоп с грибным соусом) подается с картофелем айдахо.</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td><strong>Напитки:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Морс</td>
                            <td>0,5 л</td>
                        </tr>
                        <tr>
                            <td><strong>Дополнительно:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Хлеб</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="alignCenter" colspan="2"><span style="font-size: 1.2em;"><strong>Банкет за 1600
                                        рублей на гостя</strong></span><strong> </strong></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Холодные закуски:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Селёдочка слабой соли с картофелем гриль и репчатым луком</td>
                            <td>85</td>
                        </tr>
                        <tr>
                            <td>Овощные рулетики</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Ассорти из свежих овощей</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Рыбная нарезка из рыбки слабого посола</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Мясные деликатесы</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td><strong>Салаты:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Оливье</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Цезарь с курой</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Княжеский</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Оливье или Дары моря</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td><strong>Горячая закуска:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Жульен с курой и грибами</td>
                            <td>85</td>
                        </tr>
                        <tr>
                            <td><strong>Горячее блюдо (на выбор): </strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>«Белая леди» (кура с овощами гриль + соус лечо)</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td>Медальоны из свинины, подается с картофелем айдахо</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td><strong>Напитки:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Морс</td>
                            <td>0,5 л</td>
                        </tr>
                        <tr>
                            <td><strong>Дополнительно:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Хлеб</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="alignCenter" colspan="2"><span style="font-size: 1.2em;"><strong>Банкет за 1900
                                        рублей на гостя </strong></span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Холодные закуски:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Селёдочка слабой соли с картофелем гриль и репчатым луком</td>
                            <td>85</td>
                        </tr>
                        <tr>
                            <td>Овощные рулетики</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>Рыбная нарезка</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td>Мясные деликатесы</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td>Икра в тарталетках</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>На выбор:</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Ассорти овощное</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Салат Греческий</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td><strong>Салаты: </strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Оливье</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Цезарь с курой</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Моцарелла</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Княжеский</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Дары моря</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td><strong>Горячая закуска (на выбор): </strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Жульен с курой и грибами</td>
                            <td>85</td>
                        </tr>
                        <tr>
                            <td>Драники</td>
                            <td>75</td>
                        </tr>
                        <tr>
                            <td><strong>Горячее блюдо (на выбор): </strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Лосось "Варяжский" подается с овощами, приготовленными на гриле</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td>Медальоны из свинины подается с картофелем айдахо</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td>«Белая леди» (кура + гарнир овощи-гриль)</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td><strong>Напитки:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Морс</td>
                            <td>0,5 л</td>
                        </tr>
                        <tr>
                            <td><strong>Дополнительно:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Хлеб</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="alignCenter" colspan="2"><span style="font-size: 1.2em;"><strong>Банкет за 2500
                                        рублей на гостя </strong></span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Холодные закуски:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Судак фаршированный (на 15 человек)</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Селёдочка слабой соли с картофелем гриль и репчатым луком</td>
                            <td>85</td>
                        </tr>
                        <tr>
                            <td>Овощные рулетики</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>На выбор:</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Ассорти овощное</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Салат Греческий</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>Рыбное ассорти</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td>Мясные деликатесы</td>
                            <td>70</td>
                        </tr>
                        <tr>
                            <td>Икра в тарталетках</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td><strong>Салаты (6 на выбор):</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Оливье</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Цезарь с курой</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Цезарь с лососем</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Княжеский</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Гнездо перепелки</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Дары моря</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Сельдь под шубой</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Мясное изобилие</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Тоска</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Швейцарский</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>Моцарелла</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td><strong>Горячая закуска (на выбор): </strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Жульен с курой и грибами</td>
                            <td>85</td>
                        </tr>
                        <tr>
                            <td>Жульен с морепродуктами</td>
                            <td>85</td>
                        </tr>
                        <tr>
                            <td><strong>Горячее блюдо (на выбор): </strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Лосось "Варяжский" подается с овощами, приготовленными на гриле</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td>Медальоны из свинины подается с картофелем айдахо</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td>Рулетики по-княжески, подаются с цветной капустой</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td><strong>Напитки:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Морс</td>
                            <td>0,5 л</td>
                        </tr>
                        <tr>
                            <td><strong>Дополнительно:</strong></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>Хлеб</td>
                            <td>&nbsp;</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('app.shared._sidebar')
@overwrite