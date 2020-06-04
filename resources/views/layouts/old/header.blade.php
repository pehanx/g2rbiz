<header class="header">
    <div class="container">
        <div class="header__left">
            <a href="{{route('home')}}" class="header__left__logo"></a>
        </div>

        <nav class="header__navigation">
            <a href="{{route('administration')}}" class="header__navigation__link">@lang('messages.administration')</a>
            <?/*<a href="#" class="header__navigation__link">Направления</a>*/?>
            <a href="{{route('invest')}}" class="header__navigation__link">@lang('messages.Investments')</a>
            <a href="{{route('contacts')}}" class="header__navigation__link">@lang('messages.Contacts')</a>

        <?php $locale = App::getLocale();?>

            @if(App::isLocale('ru'))
                <a href="<?= route('setlocale', ['lang' => 'en']) ?>" class="header__navigation__link header__navigation__link-lang">Eng</a>
            @else
                <a href="<?= route('setlocale', ['lang' => 'ru']) ?>" class="header__navigation__link header__navigation__link-lang">Рус</a>
            @endif


        </nav>

        <div class="header__navigation__open"></div>
    </div>
</header>
