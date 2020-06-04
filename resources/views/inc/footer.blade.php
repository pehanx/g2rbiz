<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <a href="{{route('home')}}" class="footer__logo"></a>
{{--            <div class="footer__links">--}}
{{--                <a class="footer__link title">Инвесторам</a>--}}
{{--                <a class="footer__link title">Вакансии</a>--}}
{{--            </div>--}}
        </div>
        <div class="footer__center">
            <span class="footer__link title">Направления</span>
            <a href="{{route('asiaoptom')}}" class="footer__link">Товары оптом из Китая</a>
            <a href="{{route('export')}}" class="footer__link">Поиск покупателей за рубежом</a>
            <a href="{{route('engineering')}}" class="footer__link">Оборудование и расходные материалы</a>
            <a href="#" class="footer__link">Международная торговая B2B-платформа</a>
            <a href="{{route('logistics')}}" class="footer__link">Международный логистический сервис</a>
            <a href="{{route('printural')}}" class="footer__link">Производство рекламной продукции</a>

        </div>
        <div class="footer__bottom">
            <a href="tel:+79615759000" class="footer__link title">+7 961 575 90 00</a>
            <a href="mailto:rushan@g2r.biz" class="footer__link title">rushan@g2r.biz</a>
        </div>
    </div>
</footer>
<script src="{{ mix('assets/js/app.js') }}"></script>
