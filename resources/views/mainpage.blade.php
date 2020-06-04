@extends('layouts.default')
{{--@section('title')--}}
{{--    G2R — Группа компаний--}}
{{--@endsection--}}
@section('content')

    <div class="slides">

        <section id="slide1" class="mainPageHero">
            <div class="firstPage__mouse mainPageHero__mouse"></div>
            <div class="container">
                <div class="mainPageHero__text">
                    <h2>Помогаем в работе с зарубежными рынками</h2>
                </div>
            </div>
        </section>

        <section id="slide2"  class="mainPageBlock1">
            <div class="container desktop">
                <div>
                    <div class="mainPageBlock1__firstBlock">
                        <div class="mainPageBlock1__firstBlock__title"><h3>G2R сегодня </h3></div>
                        <div class="mainPageBlock1__firstBlock__text">
                            Мы — группа компаний, которая с 2006 года работает на международных рынках по направлениям:
                        </div>
                    </div>
                    <div class="mainPageBlock1__links">
                        <a href="{{route('asiaoptom')}}" class="mainPageBlock1__link mainPageBlock1__link-asiaoptom" data-bg="/assets/svg/company/asiaoptom.svg">Товары оптом из Китая</a>
                        <a href="{{route('engineering')}}" class="mainPageBlock1__link mainPageBlock1__link-g2rmachine" data-bg="/assets/svg/company/g2rmachine.svg">Оборудование и расходные материалы</a>
                        <a href="{{route('logistics')}}" class="mainPageBlock1__link mainPageBlock1__link-g2rlogistics" data-bg="/assets/svg/company/g2rlogistics.svg">Международный логистический сервис</a>
                        <a href="{{route('export')}}" class="mainPageBlock1__link mainPageBlock1__link-g2rexport" data-bg="/assets/svg/company/g2rexport.svg ">Поиск покупателей за рубежом</a>
                        <a href="#" class="mainPageBlock1__link mainPageBlock1__link-g2rmarket" data-bg="/assets/svg/company/g2rmarket.svg">Международная торговая B2B-платформа</a>
                        <a href="{{route('printural')}}" class="mainPageBlock1__link mainPageBlock1__link-printural" data-bg="/assets/svg/company/printural.svg">Производство рекламной продукции</a>
                    </div>
                </div>
                <div class="mainPageBlock1__image"></div>
            </div>
            <div class="container tablet">
                    <div class="mainPageBlock1__firstBlock">
                        <div class="mainPageBlock1__firstBlock__title"><h3>G2R сегодня </h3></div>
                        <div class="mainPageBlock1__firstBlock__text">
                            Мы — группа компаний, которая с 2006 года работает на международных рынках по направлениям:
                        </div>
                    </div>
                    <div class="mainPageBlock1__blocks">
                        <div class="mainPageBlock1__item">
                            <div class="mainPageBlock1__item__title">Товары оптом из Китая</div>
                            <div>
                                <a href="{{route('asiaoptom')}}" class="mainPageBlock1__item__link">Информации о компании →</a>
                                <div class="mainPageBlock1__item__image" style="background-image: url('/assets/svg/company/asiaoptom.svg')"></div>
                            </div>
                        </div>
                        <div class="mainPageBlock1__item">
                            <div class="mainPageBlock1__item__title">Оборудование и расходные материалы</div>
                            <div>
                            <a href="{{route('engineering')}}" class="mainPageBlock1__item__link">Информации о компании →</a>
                            <div class="mainPageBlock1__item__image" style="background-image: url('/assets/svg/company/g2rmachine.svg')"></div>
                            </div>
                        </div>
                        <div class="mainPageBlock1__item">
                            <div class="mainPageBlock1__item__title">Международный логистический сервис</div>
                            <div>
                            <a href="{{route('logistics')}}" class="mainPageBlock1__item__link">Информации о компании →</a>
                            <div class="mainPageBlock1__item__image" style="background-image: url('/assets/svg/company/g2rlogistics.svg')"></div>
                            </div>
                        </div>
                        <div class="mainPageBlock1__item">
                            <div class="mainPageBlock1__item__title">Поиск покупателей за рубежом</div>
                            <div>
                            <a href="{{route('export')}}" class="mainPageBlock1__item__link">Информации о компании →</a>
                            <div class="mainPageBlock1__item__image" style="background-image: url('/assets/svg/company/g2rexport.svg')"></div>
                            </div>
                        </div>
                        <div class="mainPageBlock1__item">
                            <div class="mainPageBlock1__item__title">Международная торговая B2B-платформа</div>
                            <div>
                            <a href="#" class="mainPageBlock1__item__link">Информации о компании →</a>
                            <div class="mainPageBlock1__item__image" style="background-image: url('/assets/svg/company/g2rmarket.svg')"></div>
                            </div>
                        </div>
                        <div class="mainPageBlock1__item">
                            <div class="mainPageBlock1__item__title">Производство рекламной продукции</div>
                            <div>
                            <a href="{{route('printural')}}" class="mainPageBlock1__item__link">Информации о компании →</a>
                            <div class="mainPageBlock1__item__image" style="background-image: url('/assets/svg/company/printural.svg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="slide3" class="mainPageTeam">
            <div class="container desktop">
                <div class="mainPageTeam__left">
                    <div class="mainPageTeam__title"><h3>Команда</h3></div>
                    <div class="mainPageTeam__photo aboutBlock__photo-fullwidth">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/giniyatov.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Гиниятов Рушан</div>
                        <div class="mainPageTeam__photo__jobs">Учредитель G2R</div>
                    </div>
                </div>
                <div class="mainPageTeam__right">
                    <div class="mainPageTeam__photo aboutBlock__photo">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/zaripova.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Зарипова Юлия</div>
                        <div class="mainPageTeam__photo__jobs">AsiaOptom</div>
                    </div>
                    <div class="mainPageTeam__photo aboutBlock__photo">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/berdigulov.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Бердигулов Марат</div>
                        <div class="mainPageTeam__photo__jobs">G2R Machine</div>
                    </div>
                    <div class="mainPageTeam__photo aboutBlock__photo">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/lesovaya.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Лесовая Ксения</div>
                        <div class="mainPageTeam__photo__jobs">G2R Logistics</div>
                    </div>
                    <div class="mainPageTeam__photo aboutBlock__photo">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/istambaeva.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Истамбаева Виктория</div>
                        <div class="mainPageTeam__photo__jobs">G2R Export</div>
                    </div>
                    <div class="mainPageTeam__photo aboutBlock__photo">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/kovalenko.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Коваленко Петр</div>
                        <div class="mainPageTeam__photo__jobs">G2R Market</div>
                    </div>
                    <div class="mainPageTeam__photo aboutBlock__photo">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/ruslan.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Гиниятов Руслан</div>
                        <div class="mainPageTeam__photo__jobs">Print Ural</div>
                    </div>
                </div>
            </div>
            <div class="container tablet">
                <div class="mainPageTeam__title"><h3>Команда</h3></div>
                <div class="mainPageTeam__content">
                    <div class="mainPageTeam__photo mainPageTeam__photo-fullwidth">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/giniyatov.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Гиниятов Рушан</div>
                        <div class="mainPageTeam__photo__jobs">Учредитель G2R</div>
                    </div>
                    <div class="mainPageTeam__photo ">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/zaripova.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Зарипова Юлия</div>
                        <div class="mainPageTeam__photo__jobs">AsiaOptom</div>
                    </div>
                    <div class="mainPageTeam__photo mainPageTeam__photo">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/berdigulov.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Бердигулов Марат</div>
                        <div class="mainPageTeam__photo__jobs">G2R Machine</div>
                    </div>
                    <div class="mainPageTeam__photo ">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/lesovaya.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Лесовая Ксения</div>
                        <div class="mainPageTeam__photo__jobs">G2R Logistics</div>
                    </div>
                    <div class="mainPageTeam__photo ">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/istambaeva.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Истамбаева Виктория</div>
                        <div class="mainPageTeam__photo__jobs">G2R Export</div>
                    </div>
                    <div class="mainPageTeam__photo ">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/kovalenko.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Коваленко Петр</div>
                        <div class="mainPageTeam__photo__jobs">G2R Market</div>
                    </div>
                    <div class="mainPageTeam__photo ">
                        <div class="mainPageTeam__photo__area" style="background-image: url('/assets/img/people/ruslan.jpg');"></div>
                        <div class="mainPageTeam__photo__name">Гиниятов Руслан</div>
                        <div class="mainPageTeam__photo__jobs">Print Ural</div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
