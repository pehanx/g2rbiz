@extends('layouts.default')

@section('content')
    <div class="slides">


        <section id="slide1" class="companyHero">
            <div class="firstPage__mouse"></div>
            <div class="container">
                <div class="companyHero__content">
                    <div class="companyHero__content__logo" style="background-image: url('/assets/svg/company/logo/asiaoptom-logo.svg');"></div>
                    <div class="companyHero__content__text">
                        <p>Надежные поставщики товаров оптом для вашего бизнеса</p>
                    </div>
                    <div class="companyHero__content__link">Перейти на сайт →</div>
                </div>
            </div>
        </section>

        <section id="slide2" class="company companyAbout">
            <div class="container">
                <div class="company__title"><h2>Что такое AsiaOptom</h2></div>
                <div class="companyAbout__hr hr"></div>
                <div class="companyAbout__content">
                    <div class="companyAbout__content__text">
                        <p>Это торговая площадка, которая помогает закупать товары оптом на внутреннем рынке Китая.</p>
                    </div>

                    <div class="companyAbout__steps">
                        <div class="companyAbout__steps__element">
                            <div class="companyAbout__steps__element__image" style="background-image: url('/assets/svg/company/asiaoptom/steps/notebook.svg')">
                            </div>
                            <div class="companyAbout__steps__element__text">
                                <p>Вы оставляете заявку, мы выкупаем товары у поставщиков</p>
                            </div>
                        </div>
                        <div class="companyAbout__steps__element">
                            <div class="companyAbout__steps__element__image" style="background-image: url('/assets/svg/company/asiaoptom/steps/home.svg')">
                            </div>
                            <div class="companyAbout__steps__element__text">
                                <p>Собираем на собственных складах в Китае</p>
                            </div>
                        </div>
                        <div class="companyAbout__steps__element">
                            <div class="companyAbout__steps__element__image" style="background-image: url('/assets/svg/company/asiaoptom/steps/box.svg')">
                            </div>
                            <div class="companyAbout__steps__element__text">
                                <p>После проверки на соответствие формируем единый груз</p>
                            </div>
                        </div>
                        <div class="companyAbout__steps__element">
                            <div class="companyAbout__steps__element__image" style="background-image: url('/assets/svg/company/asiaoptom/steps/car.svg')">
                            </div>
                            <div class="companyAbout__steps__element__text">
                                <p>Доставляем его до вашего города. Все транспортные и таможенные вопросы берем на себя.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="slide3" class="company companyUseful">
            <div class="container">
                <div class="company__title"><h2>Мы будем вам полезны, если:</h2></div>
                <div class="companyUseful__hr hr"></div>
                <div class="companyUseful__content">
                    <div class="companyUseful__content__elements">

                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/useful/case.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Вы начинающий предприниматель и открываете товарный бизнес</p>
                            </div>
                        </div>

                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/useful/rocket.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Вы начинающий предприниматель и открываете товарный бизнес</p>
                            </div>
                        </div>

                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/useful/money.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Вы начинающий предприниматель и открываете товарный бизнес</p>
                            </div>
                        </div>

                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/useful/cup.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Вы начинающий предприниматель и открываете товарный бизнес</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="slide4" class="company companyOffer">
            <div class="container">
                <div class="company__title"><h2>Что мы предлагаем:</h2></div>
                <div class="companyOffer__hr hr"></div>
                <div class="companyOffer__content desktop-slider">
                    <div class="companyOffer__content__elements">

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer1/search.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Бесплатный поиск товаров и поставщиков</p>
                            </div>
                        </div>

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer1/products.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Уникальные товары, которых нет у ваших конкурентов</p>
                            </div>
                        </div>

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer1/price.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Низкие цены и качественные товары</p>
                            </div>
                        </div>

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer1/coins.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Оплата в удобной валюте </p>
                            </div>
                        </div>

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer1/cargo.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Консолидация грузов от разных поставщиков</p>
                            </div>
                        </div>

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer1/camera.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Проверка товаров на соответствие </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="companyOffer__content tablet-slider">
                    <div class="companyOffer__content__elements">

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer1/search.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Бесплатный поиск товаров и поставщиков</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer1/products.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Уникальные товары, которых нет у ваших конкурентов</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer1/price.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Низкие цены и качественные товары</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer1/coins.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Оплата в удобной валюте </p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer1/cargo.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Консолидация грузов от разных поставщиков</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer1/camera.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Проверка товаров на соответствие </p>
                            </div>
                        </div>

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer2/plane.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Доставка в любую страну, город</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer2/shield.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Защита и страхование грузов</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer2/document.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Таможенное оформление</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer2/files.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Документы для юридических и физических лиц</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer2/headphones.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Поддержка на русском и английском языке</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="slide5" class="company companyOffer2 desktop-slider">
            <div class="container">
                <div class="companyOffer2__content">
                    <div class="companyOffer__content__elements">

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer2/plane.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Доставка в любую страну, город</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer2/shield.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Защита и страхование грузов</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer2/document.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Таможенное оформление</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer2/files.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Документы для юридических и физических лиц</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/asiaoptom/offer2/headphones.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Поддержка на русском и английском языке</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="slide6" class="company companyChooseUs">
            <div class="container">

                <div class="company__title"><h2>Выбирайте нас, потому что</h2></div>
                <div class="companyChooseUs__hr hr"></div>

                <div class="companyChooseUs__content">
                    <div class="companyChooseUs__content__elements">
                        <div class="companyChooseUs__content__elements__text">
                            <h4>Онлайн-магазинов с китайскими товарами много, однако не все они ориентированы на работу с международным бизнесом. </h4>
                        </div>
                        <div class="companyChooseUs__content__elements__text">
                            <p>Площадка AsiaOptom предлагает полезные сервисы для B2B, которых просто нет у таких гигантов, как AliExpress или Alibaba.</p>
                        </div>
                        <div class="companyChooseUs__content__elements__text">
                            <p>Посмотрите сами:</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="slide7" class="company companyChooseUsTable">
            <div class="container table">
                <table>
                    <tr>
                        <th></th>
                        <th>AsiaOptom</th>
                        <th>Aliexpress</th>
                        <th>Alibaba</th>
                        <th>Оптовый рынок</th>
                    </tr>
                    <tr>
                        <td>Товары оптом</td>
                        <td>Есть</td>
                        <td class="red">Нет</td>
                        <td>Есть</td>
                        <td>Есть</td>
                    </tr>
                    <tr>
                        <td>Бесплатный запрос на поиск товаров и поставщиков</td>
                        <td>Есть</td>
                        <td class="red">Нет</td>
                        <td class="red">Нет</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Поддержка на всех этапах сделки</td>
                        <td>Есть</td>
                        <td class="red">Нет</td>
                        <td class="red">Нет</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Проверка товаров на соответствие</td>
                        <td>Есть</td>
                        <td class="red">Нет</td>
                        <td>Есть</td>
                        <td>Есть</td>
                    </tr>
                    <tr>
                        <td>Оплата в любой валюте</td>
                        <td>Есть</td>
                        <td>Есть</td>
                        <td class="red">Нет</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Документы для юр. лиц</td>
                        <td>Есть</td>
                        <td class="red">Нет</td>
                        <td class="red">Нет</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Мультиязычный сервис</td>
                        <td>Есть</td>
                        <td>Есть</td>
                        <td>Есть</td>
                        <td class="red">Нет</td>
                    </tr>
                </table>

            </div>

            <div class="container accordion">

                <button class="accordion__button">AsiaOptom</button>
                <div  class="accordion__panel">
                <table>
                    <tr>
                        <td>Товары оптом</td>
                        <td>Есть</td>
                    </tr>
                    <tr>
                        <td>Бесплатный запрос на поиск товаров и поставщиков</td>
                        <td>Есть</td>
                    </tr>
                    <tr>
                        <td>Поддержка на всех этапах сделки</td>
                        <td>Есть</td>
                    </tr>
                    <tr>
                        <td>Проверка товаров на соответствие</td>
                        <td>Есть</td>
                    </tr>
                    <tr>
                        <td>Оплата в любой валюте</td>
                        <td>Есть</td>
                    </tr>
                    <tr>
                        <td>Документы для юр. лиц</td>
                        <td>Есть</td>
                    </tr>
                    <tr>
                        <td>Мультиязычный сервис</td>
                        <td>Есть</td>
                    </tr>
                </table>
                </div>

                <button class="accordion__button">Aliexpress</button>
                <div  class="accordion__panel">
                <table>
                    <tr>
                        <td>Товары оптом</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Бесплатный запрос на поиск товаров и поставщиков</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Поддержка на всех этапах сделки</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Проверка товаров на соответствие</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Оплата в любой валюте</td>
                        <td>Есть</td>
                    </tr>
                    <tr>
                        <td>Документы для юр. лиц</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Мультиязычный сервис</td>
                        <td>Есть</td>
                    </tr>
                </table>
                </div>

                <button class="accordion__button">Alibaba</button>
                <div class="accordion__panel">
                <table>
                    <tr>
                        <td>Товары оптом</td>
                        <td>Есть</td>
                    </tr>
                    <tr>
                        <td>Бесплатный запрос на поиск товаров и поставщиков</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Поддержка на всех этапах сделки</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Проверка товаров на соответствие</td>
                        <td>Есть</td>
                    </tr>
                    <tr>
                        <td>Оплата в любой валюте</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Документы для юр. лиц</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Мультиязычный сервис</td>
                        <td>Есть</td>
                    </tr>
                </table>
                </div>

                <button class="accordion__button">Оптовый рынок</button>
                <div class="accordion__panel">
                <table>
                    <tr>
                        <td>Товары оптом</td>
                        <td>Есть</td>
                    </tr>
                    <tr>
                        <td>Бесплатный запрос на поиск товаров и поставщиков</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Поддержка на всех этапах сделки</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Проверка товаров на соответствие</td>
                        <td>Есть</td>
                    </tr>
                    <tr>
                        <td>Оплата в любой валюте</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Документы для юр. лиц</td>
                        <td class="red">Нет</td>
                    </tr>
                    <tr>
                        <td>Мультиязычный сервис</td>
                        <td class="red">Нет</td>
                    </tr>
                </table>
                </div>

            </div>
        </section>


    </div>
@endsection
