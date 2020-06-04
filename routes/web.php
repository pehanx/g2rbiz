<?php
//Переключение языков
Route::get('setlocale/{lang}', function ($lang) {

    $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
    $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

    //разбиваем на массив по разделителю
    $segments = explode('/', $parse_url);

    //Если URL (где нажали на переключение языка) содержал корректную метку языка
    if (in_array($segments[1], App\Http\Middleware\Locale::$languages)) {

        unset($segments[1]); //удаляем метку
    }

    //Добавляем метку языка в URL
    array_splice($segments, 1, 0, $lang);

//    Добавляем метку языка в URL (если выбран не язык по-умолчанию)
//    if ($lang != App\Http\Middleware\Locale::$mainLanguage){
        array_splice($segments, 1, 0, $lang);
//    }


    //формируем полный URL
    $url = Request::root().implode("/", $segments);

    //если были еще GET-параметры - добавляем их
    if(parse_url($referer, PHP_URL_QUERY)){
        $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url); //Перенаправляем назад на ту же страницу

})->name('setlocale');

Route::group(['prefix' => App\Http\Middleware\Locale::getLocale()], function(){

    Route::get('/', 'IndexController@mainpage')->name('home');

    Route::get('/asiaoptom', 'IndexController@asiaoptom')->name('asiaoptom');
    Route::get('/export', 'IndexController@g2rexport')->name('export');
    Route::get('/engineering', 'IndexController@g2rmachine')->name('engineering');
    Route::get('/logistics', 'IndexController@g2rlogistics')->name('logistics');
    Route::get('/printural', 'IndexController@printural')->name('printural');

    Route::post('/email', 'IndexController@SendForm')->name('mail-form');

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
});

Route::get('/', function (){
    return redirect('ru');
});

Route::get('/asiaoptom', function (){
    return redirect('ru/asiaoptom');
});
Route::get('/export', function (){
    return redirect('ru/export');
});
Route::get('/engineering', function (){
    return redirect('ru/engineering');
});
Route::get('/logistics', function (){
    return redirect('ru/logistics');
});
Route::get('/printural', function (){
    return redirect('ru/printural');
});

///direction-ao.php
///direction-ae.php
///team.php
///direction-pu.php
///invest.php
///index-eng.php
///direction-rec.php
///direction-rivers.php
///direction-log.php
///contacts.php
///invest-eng.php
///direction-rivers-eng.php
///direction-log-eng.php
///direction-rec-eng.php
///team-eng.php
///direction-ae-eng.php
///direction-ao-eng.php
///contacts-eng.php
///direction-pu-eng.php
