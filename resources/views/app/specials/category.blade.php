@extends('layouts.application')

@section('content')
  <div class="col-md-9 col-xs-12">
      <div class="row">
          <div class="headerNoMargin col-xs-12">
              <h1 class="col-sm-6 col-xs-12">
                  Корпоративные праздники
              </h1>
              <div class="col-sm-6 hidden-xs text-right buttonsBlock">
                  <a class="btn-orange" href="{{ url("restaurants/specials/1/add") }}">Добавить предложение</a>
                  <a class="btn-orange" id="special-sort-offers" href="javascript:void(0);">Изменить порядок</a>
              </div>
          </div>
          <div class="col-xs-12 std-block">
              <ul class="banketsList">
                  <li class="banketsList__item col-xs-12 no-padding">
                      <img src="http://assets.allcafe.ru/pic/specials/offer-155.jpeg" class="col-sm-2 col-xs-3 img-responsive" alt="">
                      <div class="body col-xs-9" data-id="155">
                          <a href="/restaurants/specials/1/offer-155">Корпоративные праздники в ресторане «Русское застолье»</a>
                          <a href="/restaurants/specials/1/edit-155"><img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px; float: none;"></a>
                          <p>Идеальный ресторан для Вашего праздника. Два просторных зала вместимостью по 30 и 50 человек, светлый классический интерьер, высокие потолки, придающие ресторану особую торжественность.</p>
                      </div>
                  </li>
                  <li class="banketsList__item col-xs-12 no-padding">
                      <img src="http://assets.allcafe.ru/pic/specials/offer-322.jpeg" class="col-sm-2 col-xs-3 img-responsive" alt="">
                      <div class="body col-xs-9" data-id="322">
                          <a href="/restaurants/specials/1/offer-322">Корпоративыв гастробаре Bourbon.</a>
                          <a href="/restaurants/specials/1/edit-322"><img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px; float: none;"></a>
                          <p style="text-align: justify;">Bourbon bar — это стильное заведение с современным интерьером, акцентом на авторской гастрономии в меню и внушительным выбором напитков в баре. Это атмосферное место в самом центре Санкт-Петербурга, которое идеально подходит для любого празднования в кругу родных и друзей.</p>

                      </div>
                  </li>
                  <li class="banketsList__item col-xs-12 no-padding">
                      <img src="http://assets.allcafe.ru/pic/specials/offer-320.jpeg" class="col-sm-2 col-xs-3 img-responsive" alt="">
                      <div class="body col-xs-9" data-id="320">
                          <a href="/restaurants/specials/1/offer-320">Корпоративные праздники в ресторане «Tequila-Boom» на Вознесенском</a>
                          <a href="/restaurants/specials/1/edit-320"><img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px; float: none;"></a>
                          <p style="text-align: justify;">Красочный интерьер нашей кантины создаст настроение праздника и поможет Вам полностью окунуться в атмосферу жаркой Мексики.</p>

                      </div>
                  </li>
                  <li class="banketsList__item col-xs-12 no-padding">
                      <img src="http://assets.allcafe.ru/pic/specials/offer-309.jpeg" class="col-sm-2 col-xs-3 img-responsive" alt="">
                      <div class="body col-xs-9" data-id="309">
                          <a href="/restaurants/specials/1/offer-309">Корпоративные праздники в ресторане «Bretzel»</a>
                          <a href="/restaurants/specials/1/edit-309"><img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px; float: none;"></a>
                          <p><span>Это место с авторской кухней, уютным интерьером и           непередаваемой душевной атмосферой.</span></p>
                      </div>
                  </li>
                  <li class="banketsList__item col-xs-12 no-padding">
                      <img src="http://assets.allcafe.ru/pic/specials/offer-302.jpeg" class="col-sm-2 col-xs-3 img-responsive" alt="">
                      <div class="body col-xs-9" data-id="302">
                          <a href="/restaurants/specials/1/offer-302">Корпоративные праздники в ресторане «Pacman»</a>
                          <a href="/restaurants/specials/1/edit-302"><img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px; float: none;"></a>
                          <p>Не только светские мероприятия и романтические ужины, но и деловые встречи и торжественные приемы - Pacman отлично подойдет для особых событий любого масштаба.</p>
                      </div>
                  </li>
                  <li class="banketsList__item banketsList__item__disabled col-xs-12 no-padding">
                      <img src="http://assets.allcafe.ru/pic/specials/offer-282.jpeg" class="col-sm-2 col-xs-3 img-responsive" alt="">
                      <div class="body col-xs-9" data-id="282">
                          <a href="/restaurants/specials/1/offer-282">Корпоративные праздники в винном баре «Жан-Жак» на Васильевском острове</a>
                          <a href="/restaurants/specials/1/edit-282"><img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px; float: none;"></a>
                          <p>Жан Жак – отличное место для проведения корпоративных праздников. Видовые окна на  Андреевский Собор, вместимость до 150 человек и близость метро.</p>
                      </div>
                  </li>
                  <li class="banketsList__item banketsList__item__disabled col-xs-12 no-padding">
                      <img src="http://assets.allcafe.ru/pic/specials/offer-223.jpeg" class="col-sm-2 col-xs-3 img-responsive" alt="">
                      <div class="body col-xs-9" data-id="223">
                          <a href="/restaurants/specials/1/offer-223">Корпоративные праздники в ресторане «Новая Ялта»</a>
                          <a href="/restaurants/specials/1/edit-223"><img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px; float: none;"></a>
                          <p>Ресторан «Новая Ялта» приглашает друзей отметить Новый год в уютной компании.</p>
                      </div>
                  </li>
                  <li class="banketsList__item banketsList__item__disabled col-xs-12 no-padding">
                      <img src="http://assets.allcafe.ru/pic/specials/offer-167.jpeg" class="col-sm-2 col-xs-3 img-responsive" alt="">
                      <div class="body col-xs-9" data-id="167">
                          <a href="/restaurants/specials/1/offer-167">Корпоративные праздники в ресторане Нихао</a>
                          <a href="/restaurants/specials/1/edit-167"><img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px; float: none;"></a>
                          <p>Ресторан «Нихао» - идеальное место для проведения праздников, связанных с юбилейными торжествами и свадьбами.</p>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  @include('app.shared._sidebar')
@overwrite