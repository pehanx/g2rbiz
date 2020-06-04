$(document).ready(function(){
    let pageUrl = window.location.pathname;
    switch (pageUrl) {
        case '/ru/asiaoptom':
            $('body').addClass('AsiaOptom-page');
            break;
        case '/ru/engineering':
            $('body').addClass('G2Rmachine-page');
            break;
        case '/ru/logistics':
            $('body').addClass('G2Rlogistics-page');
            break;
        case '/ru/printural':
            $('body').addClass('PrintUral-page');
            break;
        case '/ru/export':
            $('body').addClass('G2Rexport-page');
            break;
    }
});
