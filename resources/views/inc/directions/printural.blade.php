@extends('layouts.default')

@section('content')
    <div class="slides">

        <section id="slide1" class="companyHero companyHero">
            <div class="firstPage__mouse"></div>
            <div class="container">
                <div class="companyHero__content">
                    <div class="companyHero__content__logo" style="background-image: url('/assets/svg/company/logo/printural-logo.svg');"></div>
                    <div class="companyHero__content__text">
                        <p>Производство рекламной продукции</p>
                    </div>
                    <div class="companyHero__content__link">Перейти на сайт →</div>
                </div>
            </div>
        </section>

        <section id="slide2" class="company companyAbout">
            <div class="container">
                <div class="company__title"><h2>Что такое PrintUral</h2></div>
                <div class="companyAbout__hr hr"></div>
                <div class="companyAbout__content">
                    <div class="companyAbout__content__text">
                        <p>Мы — компания, которая занимается производством рекламной продукции для корпоративных клиентов и физических лиц.</p>
                        <p><strong>Наша цель — помогать предпринимателям успешно выводить свою продукцию на рынок.</strong></p>
                    </div>

                    <div class="companyAbout__content__image"
                         style="background-image: url('/assets/svg/company/printural/about-image.svg')"></div>
                </div>
            </div>
        </section>

        <section id="slide3" class="company companyUseful">
            <div class="container">
                <div class="company__title"><h2>Мы будем вам полезны в:</h2></div>
                <div class="companyUseful__hr hr"></div>
                <div class="companyUseful__content">
                    <div class="companyUseful__content__elements">

                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/useful/useful1.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Создании рекламных кампаний</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/useful/useful2.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Разработке фирменного стиля компании</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/useful/useful3.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Дизайне корпоративных помещений и реквизита</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/useful/useful4.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Подготовке стендов и баннеров</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/useful/useful5.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Оформлении вывесок</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/useful/useful6.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Монтаже рекламных материалов</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="slide4" class="company companyServices">
            <div class="container">
                <div class="company__title"><h2>Наши услуги</h2></div>
                <div class="companyServices__hr hr"></div>
                <div class="companyServices__content desktop-slider">
                    <div class="companyServices__content__elements">

                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services/services1.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Печать широкого формата</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services/services2.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Интерьерная печать</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services/services3.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Резка плоттером</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services/services4.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Лазерная резка</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services/services5.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Фрезерная резка</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services/services6.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>3D печать</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="companyServices__content tablet-slider">
                    <div class="companyServices__content__elements">

                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services/services1.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Печать широкого формата</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services/services2.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Интерьерная печать</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services/services3.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Резка плоттером</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services/services4.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Лазерная резка</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services/services5.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Фрезерная резка</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services/services6.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>3D печать</p>
                            </div>
                        </div>

                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services2/services2-1.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Изготовление эксклюзивных изделий</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services2/services2-1.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Изготовление эксклюзивных изделий</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services2/services2-2.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Изготовление эксклюзивных изделий</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services2/services2-3.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Изготовление эксклюзивных изделий</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services2/services2-4.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Изготовление эксклюзивных изделий</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services2/services2-5.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Изготовление эксклюзивных изделий</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="slide5" class="company companyServices2 desktop-slider">
            <div class="container">
                <div class="companyServices2__content">
                    <div class="companyServices__content__elements">

                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services2/services2-1.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Изготовление эксклюзивных изделий</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services2/services2-2.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Изготовление стендов и вывесок</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services2/services2-3.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Брендирование</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services2/services2-4.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Гравировка</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services2/services2-5.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Ламинирование</p>
                            </div>
                        </div>
                        <div class="companyServices__content__element">
                            <div class="companyServices__content__element__image"
                                 style="background-image: url('/assets/svg/company/printural/services2/services2-6.svg')">
                            </div>
                            <div class="companyServices__content__element__text">
                                <p>Дизайн</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
