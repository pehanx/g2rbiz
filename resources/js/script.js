$(document).ready(function(){
    $('.second_bg').on('click',function(){
        $('.invest_container').removeClass('popupopacity');
        $('.invest_bg').removeClass('popupopacity_form_bg');
        $('.hidden_company').val('');
        setTimeout(function(){
            $('.invest_container').removeClass('popupblock');
            $('.invest_bg').removeClass('popupblock');
            $('body, html').removeClass('noscroll');
            $('body').width('auto');
        },200);
    });

    $('.close').on('click',function(){
        $('.invest_container').removeClass('popupopacity');
        $('.invest_bg').removeClass('popupopacity_form_bg');
        $('.hidden_company').val('');
        setTimeout(function(){
            $('.invest_container').removeClass('popupblock');
            $('.invest_bg').removeClass('popupblock');
            $('body, html').removeClass('noscroll');
            $('body').width('auto');
        },200);
    });

    $('.invest_container').on('click',function(e){
        e.stopPropagation();
    });

    $('.invest_btn').on('click',function(e){
        e.preventDefault();
        var comany_name = $(this).parent().prev().attr('value');
        $('.hidden_company').val(comany_name);
        var width = $('body').innerWidth();
        $('.invest_bg').addClass('popupblock');
        $('.invest_container').addClass('popupblock');
        $('body, html').addClass('noscroll');
        $('body').width(width);
        setTimeout(function(){
            $('.invest_container').addClass('popupopacity');
            $('.invest_bg').addClass('popupopacity_form_bg');
        },200);
    });

    // $('.mask-for-input').on('input', function(){
    //     var value = $(this).val();
    //     value = value.replace (/\D/g, '');
    //     $(this).val(value);
    // });
    // $('.mask-for-input').mask("+9 (999) 999 99 99");
    // $('.mask-for-input').on('click',function(){
    //     if($(this).val().length == 0 || $(this).val()=="+_ (___) ___ __ __"){
    //         $(this).get(0).setSelectionRange(0,0);
    //     }
    // });

    $("#form_invest").submit(function(e){
        e.preventDefault();
        var form = $(this);
        $(this).find('.input').removeClass('error-input');
        $(this).find('.input').removeClass('succes-input');
        var error = 0;
        var regemail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if( $.trim($(this).find('.input-surname').val()).length > 0){
            $(this).find('.input-surname').addClass('succes-input');
        }else{
            $(this).find('.input-surname').addClass('error-input');
            error++;
        }
        if( $.trim($(this).find('.input-name').val()).length > 0){
            $(this).find('.input-name').addClass('succes-input');
        }else{
            $(this).find('.input-name').addClass('error-input');
            error++;
        }
        if( $.trim($(this).find('.input-text').val()).length > 0){
            $(this).find('.input-text').addClass('succes-input');
        }else{
            $(this).find('.input-text').addClass('error-input');
            error++;
        }
        if($.trim($(this).find('.input-tel').val()).length>11){
            $(this).find('.input-tel').addClass('succes-input');
        }else{
            $(this).find('.input-tel').addClass('error-input');
            error++;
        }
        if(regemail.test($(this).find('.input-email').val())){
            $(this).find('.input-email').addClass('succes-input');
            $(this).find('.input-email').parent().find('.info').addClass('info-succes');
        }else{
            $(this).find('.input-email').addClass('error-input');
            $(this).find('.input-email').parent().find('.info').addClass('info-error');
            error++;
        }
        if(error == 0){
            var data = $(this).serialize();
            $.ajax({
                // url: "mail.php",
                url: "/email",
                type: "POST",
                data: data,
                success: function(result) {
                    form.find('.input').val('');
                    form.find('.input').removeClass('error-input');
                    form.find('.input').removeClass('succes-input');
                    form.find('.textarea').val('');
                    form.find('.textarea').removeClass('error-input');
                    form.find('.textarea').removeClass('succes-input');
                    console.log("Результат - "+result);
                    $('.invest_container').removeClass('popupopacity');
                    $('.invest_bg').removeClass('popupopacity_form_bg');
                    setTimeout(function(){
                        $('.invest_container').removeClass('popupblock');
                        $('.invest_bg').removeClass('popupblock');
                        $('body, html').removeClass('noscroll');
                        $('body').width('auto');
                    },200);
                }
            });
        }
    });
});
