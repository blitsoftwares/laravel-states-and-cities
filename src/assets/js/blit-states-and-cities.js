$(document).ready(function(){

    $('#country').countries({
        onChange: function(country_id){
            $('#state').ufs({country_id: country_id});
        }
    });

})

(function ( $ ) {

    $.fn.countries = function(options) {

        var select = $(this);

        var settings = $.extend({
            'default': select.attr('default'),
            'onChange': function(id){}
        }, options );

        $.get("/countries-list", null, function (json) {

            select.empty();
            $.each(json, function (key, value) {
                select.append('<option value="' + value.id + '" '+(settings.default==value.id?'selected':'')+'>' + value.code_iso2 + ' - ' + value.name + '</option>');
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

        $.get("/states-list/"+options.country_id, null, function (json) {

            select.empty();
            $.each(json, function (key, value) {
                select.append('<option value="' + value.id + '" '+(settings.default==value.id?'selected':'')+'>' + value.name + '</option>');
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