@extends('layouts.default')

@section('content')
    <div class="slides">


        <section id="slide1" class="companyHero companyHero">
            <div class="firstPage__mouse"></div>
            <div class="container">
                <div class="companyHero__content">
                    <div class="companyHero__content__logo" style="background-image: url('/assets/svg/company/logo/g2rlogistics-logo.svg');"></div>
                    <div class="companyHero__content__text">
                        <p>Международный логистический сервис</p>
                    </div>
                    <a class="companyHero__content__link">Перейти на сайт →</a>
                </div>
            </div>
        </section>

        <section id="slide2" class="company companyAbout">
            <div class="container">
                <div class="company__title"><h2>Что такое G2R.Logistics </h2></div>
                <div class="companyAbout__hr hr"></div>
                <div class="companyAbout__content">
                    <div class="companyAbout__content__text">
                        <p>Мы — международный логистический сервис, который специализируется на экспорте и импорте.</p>
                        <p><strong>Работаем по всему миру: доставляем образцы, сборные грузы и контейнеры. Помогаем с таможенным оформлением, складом и сертификацией.</strong></p>
                    </div>

                    <div class="companyAbout__content__image"
                         style="background-image: url('/assets/svg/company/g2rlogistics/about-image.svg')"></div>

                </div>
            </div>
        </section>

        <section id="slide3" class="company companyUseful">
            <div class="container">
                <div class="company__title"><h2>Мы будем вам полезны если:</h2></div>
                <div class="companyUseful__hr hr"></div>
                <div class="companyUseful__content">
                    <div class="companyUseful__content__elements">

                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/useful/useful1.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Вы ищете надежного перевозчика или поставщика</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/useful/useful2.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Требуется доставка больших и малых грузов</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/useful/useful3.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Возникают языковые барьеры</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/useful/useful4.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Необходима проверка товаров на соответствие</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/useful/useful5.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Требуется таможенное оформление или сертификаты</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/useful/useful6.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Нужна отсрочка на оплату по договору</p>
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
                <div class="companyOffer__content">
                    <div class="companyOffer__content__elements">

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/offer/offer1.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Услуги склада</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/offer/offer2.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Международная доставка</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/offer/offer3.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Таможенное оформление</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/offer/offer4.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Сертификация</p>
                            </div>
                        </div>
                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/offer/offer5.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Отсрочка платежа</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="slide5" class="company companyChooseUs">
            <div class="container">
                <div class="company__title"><h2>Выбирайте нас, потому что МЫ</h2></div>
                <div class="companyChooseUs__hr hr"></div>
                <div class="companyChooseUs__content">
                    <div class="companyChooseUs__content__elements">

                        <div class="companyChooseUs__content__element">
                            <div class="companyChooseUs__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/chooseus/chooseus1.svg')">
                            </div>
                            <div class="companyChooseUs__content__element__text">
                                <p>Бесплатно ищем и проверяем поставщиков</p>
                            </div>
                        </div>
                        <div class="companyChooseUs__content__element">
                            <div class="companyChooseUs__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/chooseus/chooseus2.svg')">
                            </div>
                            <div class="companyChooseUs__content__element__text">
                                <p>Имеем собственные склады в Китае и Турции</p>
                            </div>
                        </div>
                        <div class="companyChooseUs__content__element">
                            <div class="companyChooseUs__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/chooseus/chooseus3.svg')">
                            </div>
                            <div class="companyChooseUs__content__element__text">
                                <p>Доставляем грузы от 1 кг</p>
                            </div>
                        </div>
                        <div class="companyChooseUs__content__element">
                            <div class="companyChooseUs__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/chooseus/chooseus4.svg')">
                            </div>
                            <div class="companyChooseUs__content__element__text">
                                <p>В нашем штате есть специалисты со знанием иностранных языков</p>
                            </div>
                        </div>
                        <div class="companyChooseUs__content__element">
                            <div class="companyChooseUs__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/chooseus/chooseus5.svg')">
                            </div>
                            <div class="companyChooseUs__content__element__text">
                                <p>Мы работаем с физическими и юридическими лицами</p>
                            </div>
                        </div>
                        <div class="companyChooseUs__content__element">
                            <div class="companyChooseUs__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rlogistics/chooseus/chooseus6.svg')">
                            </div>
                            <div class="companyChooseUs__content__element__text">
                                <p>Предоставляем поддержку на протяжении всей сделки</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




    </div>
@endsection
