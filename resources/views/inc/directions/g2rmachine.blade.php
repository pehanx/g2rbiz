@extends('layouts.default')

@section('content')
    <div class="slides">


        <section id="slide1" class="companyHero companyHero">
            <div class="firstPage__mouse"></div>
            <div class="container">
                <div class="companyHero__content">
                    <div class="companyHero__content__logo" style="background-image: url('/assets/svg/company/logo/g2rmachine-logo.svg');"></div>
                    <div class="companyHero__content__text">
                        <p>Оборудование и сервис</p>
                    </div>
                    <div class="companyHero__content__link">Перейти на сайт →</div>
                </div>
            </div>
        </section>

        <section id="slide2" class="company companyAbout">
            <div class="container">
                <div class="company__title"><h2>Что такое G2R.Machine</h2></div>
                <div class="companyAbout__hr hr"></div>
                <div class="companyAbout__content">
                    <div class="companyAbout__content__text">
                        <p> Мы — компания, которая занимается поставками оборудования, комплектующих, расходных материалов и сырья из Китая, США и Европы. Поставляем как небольшие станки, так и целые заводы и производственные линии.</p>
                        <p><strong>Наша цель — помочь малому и среднему бизнесу с собственным производством и развивать импортозамещение в стране.</strong></p>
                    </div>

                    <div class="companyAbout__content__elements">

                        <div class="companyAbout__content__element">
                            <div class="companyAbout__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/about/equipment_search.svg')">
                            </div>
                            <div class="companyAbout__content__element__text">
                                <p>Поиск оборудования</p>
                            </div>
                        </div>
                        <div class="companyAbout__content__element">
                            <div class="companyAbout__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/about/production.svg')">
                            </div>
                            <div class="companyAbout__content__element__text">
                                <p>Производство</p>
                            </div>
                        </div>
                        <div class="companyAbout__content__element">
                            <div class="companyAbout__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/about/delivery.svg')">
                            </div>
                            <div class="companyAbout__content__element__text">
                                <p>Доставка</p>
                            </div>
                        </div>
                        <div class="companyAbout__content__element">
                            <div class="companyAbout__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/about/installation.svg')">
                            </div>
                            <div class="companyAbout__content__element__text">
                                <p>Монтаж и запуск</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="slide3" class="company companyUseful">
            <div class="container">
                <div class="company__title"><h2>Мы будем вам полезны в поиске:</h2></div>
                <div class="companyUseful__hr hr"></div>
                <div class="companyUseful__content desktop-slider">
                    <div class="companyUseful__content__elements">

                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful/useful1.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Металло- и деревообрабатывающих станков</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful/useful2.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Сельскохозяйственной техники</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful/useful3.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Строительного и электрооборудования</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful/useful4.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Упаковочного и полиграфического оборудования</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful/useful5.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Медицинской техники</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful/useful6.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Оборудования легкой и пищевой промышленности</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="companyUseful__content tablet-slider">
                    <div class="companyUseful__content__elements">

                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful/useful1.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Металло- и деревообрабатывающих станков</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful/useful2.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Сельскохозяйственной техники</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful/useful3.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Строительного и электрооборудования</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful/useful4.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Упаковочного и полиграфического оборудования</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful/useful5.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Медицинской техники</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful/useful6.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Оборудования легкой и пищевой промышленности</p>
                            </div>
                        </div>

                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful2/useful2-1.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Оборудования химической промышленности</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful2/useful2-2.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Оборудования для автосервисов и машиностроения</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful2/useful2-3.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Перерабатывающего оборудования</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful2/useful2-4.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Измерительного оборудования</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful2/useful2-5.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Комплектующих, спецтехники и инструмента</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful2/useful2-6.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Сырья и расходных материалов</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="slide4" class="company companyUseful2 desktop-slider">
            <div class="container">
                <div class="companyUseful2__content">
                    <div class="companyUseful__content__elements">

                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful2/useful2-1.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Оборудования химической промышленности</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful2/useful2-2.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Оборудования для автосервисов и машиностроения</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful2/useful2-3.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Перерабатывающего оборудования</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful2/useful2-4.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Измерительного оборудования</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful2/useful2-5.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Комплектующих, спецтехники и инструмента</p>
                            </div>
                        </div>
                        <div class="companyUseful__content__element">
                            <div class="companyUseful__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/useful2/useful2-6.svg')">
                            </div>
                            <div class="companyUseful__content__element__text">
                                <p>Сырья и расходных материалов</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="slide5" class="company companyOffer">
            <div class="container">
                <div class="company__title"><h2>Что мы предлагаем:</h2></div>
                <div class="companyOffer__hr hr"></div>
                <div class="companyOffer__content">
                    <div class="companyOffer__content__elements">

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/offer/offer1.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Подбор и проектирование</p>
                            </div>
                        </div>

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/offer/offer2.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Контроль качества</p>
                            </div>
                        </div>

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/offer/offer3.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Доставка в любую точку мира</p>
                            </div>
                        </div>

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/offer/offer4.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Отсрочка платежа</p>
                            </div>
                        </div>

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/offer/offer5.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Пусконаладочные работы</p>
                            </div>
                        </div>

                        <div class="companyOffer__content__element">
                            <div class="companyOffer__content__element__image"
                                 style="background-image: url('/assets/svg/company/g2rmachine/offer/offer6.svg')">
                            </div>
                            <div class="companyOffer__content__element__text">
                                <p>Гарантийное и постгарантийное обслуживание</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
