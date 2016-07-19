@extends('layouts.application')

@section('content')
  <div class="col-sm-9">
      <div class="row">
          <div class="typeHeader std-block col-lg-12">
              <h1>
                  Банкеты и спецпредложения
              </h1>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12 text-right no-padding">
              <a class="btn-orange" href="{{ url("restaurants/specials/add") }}">Добавить категорию</a>
              <a class="btn-orange add" id="special-sort-cats" href="javascript:;">Изменить порядок</a>
          </div>
      </div>
      <div class="row">
          <div class="col-xs-12 no-padding specials">
              <div class="col-sm-6 specialsBlock">
                  <a href="{{ url("restaurants/specials/1") }}" class="item">
                      <img src="http://assets.allcafe.ru/pic/specials/cat-1.jpeg" alt="" class="specialsBlock__pic">
                        <span class="specialsBlock__info">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <strong>Корпоративные праздники</strong>
                                        <a class="img-button" href="{{ url("restaurants/specials/edit-1") }}">
                                            <img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px;">
                                        </a>
                                        <br>
                                        <p>(в т. ч. корпоративные новогодние и рождественские праздники)</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </span>
                  </a>
              </div>
              <div class="col-sm-6 specialsBlock">
                  <a href="{{ url("restaurants/specials/3") }}" class="item">
                      <img src="http://assets.allcafe.ru/pic/specials/cat-3.jpeg" class="specialsBlock__pic" alt="">
                        <span class="specialsBlock__info">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <strong>Банкеты</strong>
                                        <a class="img-button" href="{{ url("restaurants/specials/edit-3") }}"><img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px;"></a>
                                        <br>
                                        <p>(проведение банкетов в ресторанах и кафе)</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </span>
                  </a>
              </div>

              <div class="col-sm-6 specialsBlock">
                  <a href="{{ url("restaurants/specials/4") }}" class="item">
                      <img src="http://assets.allcafe.ru/pic/specials/cat-4.jpeg" class="specialsBlock__pic" alt="">
                        <span class="specialsBlock__info">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <strong>Свадьбы</strong>
                                        <a class="img-button" href="{{ url("restaurants/specials/edit-4") }}"><img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px;"></a>
                                        <br>
                                        <p>(предложения по проведению свадеб в ресторанах и кафе)</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </span>
                  </a>
              </div>
              <div class="col-sm-6 specialsBlock">
                  <a href="{{ url("restaurants/specials/5") }}" class="item">
                      <img src="http://assets.allcafe.ru/pic/specials/cat-5.jpeg" class="specialsBlock__pic" alt="">
                        <span class="specialsBlock__info">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <strong>Детские праздники</strong>
                                        <a class="img-button" href="{{ url("restaurants/specials/edit-5") }}"><img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px;"></a>
                                        <br>
                                        <p>(проведение детских праздников в ресторанах и кафе)</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </span>
                  </a>
              </div>

              <div class="col-sm-6 specialsBlock">
                  <a href="{{ url("restaurants/specials/7") }}" class="item">
                      <img src="http://assets.allcafe.ru/pic/specials/cat-7.jpeg" class="specialsBlock__pic" alt="">
                        <span class="specialsBlock__info">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <strong>Catering (выездное обслуживание)</strong>
                                        <a class="img-button" href="{{ url("restaurants/specials/edit-7") }}"><img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px;"></a>
                                        <br>

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </span>
                  </a>
              </div>
              <div class="col-sm-6 specialsBlock">
                  <a href="{{ url("restaurants/specials/8") }}" class="item">
                      <img src="http://assets.allcafe.ru/pic/specials/cat-8.jpeg" class="specialsBlock__pic" alt="">
                        <span class="specialsBlock__info">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <strong>Развлекательные программы</strong>
                                        <a class="img-button" href="{{ url("restaurants/specials/edit-8") }}"><img src="http://assets.allcafe.ru/icons/16/edit.png" style="width: 16px;"></a>
                                        <br>

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </span>
                  </a>
              </div>
          </div>
      </div>
  </div>
  @include('app.shared._sidebar')
@overwrite