(function ( $ ) {

    $.fn.countries = function(options) {

        var select = $(this);

        var settings = $.extend({
            'default': select.attr('default'),
            'onChange': function(uf){}
        }, options );

        $.get("/ufs", null, function (json) {

            $.each(json, function (key, value) {
                select.append('<option value="' + value.id + '" '+(settings.default==value.id?'selected':'')+'>' + value.abbreviation + '</option>');
            })

            settings.onChange(select.val());
            $('select').selectpicker('refresh');

        }, 'json');

        select.change(function(){
            settings.onChange(select.val());
            $('select').selectpicker('refresh');
        });
    };

    $.fn.ufs = function(options) {

        var select = $(this);

        var settings = $.extend({
            'default': select.attr('default'),
            'onChange': function(uf){}
        }, options );

        $.get("/ufs", null, function (json) {

            $.each(json, function (key, value) {
                select.append('<option value="' + value.id + '" '+(settings.default==value.id?'selected':'')+'>' + value.abbreviation + '</option>');
            })

            settings.onChange(select.val());
            $('select').selectpicker('refresh');

        }, 'json');

        select.change(function(){
            settings.onChange(select.val());
            $('select').selectpicker('refresh');
        });
    };


    $.fn.cidades = function(options) {

        var select = $(this);

        var settings = $.extend({
            'default': select.attr('default'),
            'uf': null
        }, options );

        if(settings.uf == null)
            console.warn('Nenhuma UF informada');
        else{

            select.html('<option>Carregando..</option>');
            $('select').selectpicker('refresh');

            $.get("/cidades/"+settings.uf, null, function (json) {
                select.html('<option value="">Selecione</option>');


                $.each(json, function (key, value) {
                    select.append('<option value="' + value.id + '" '+((settings.default==value.id || settings.default==value.id)?'selected':'')+'>' + value.name + '</option>');
                })
                $('select').selectpicker('refresh');

            }, 'json');
            $('select').selectpicker('refresh');


        }
    };

}( jQuery ));