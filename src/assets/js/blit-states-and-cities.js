$(document).ready(function(){

    var cmp_postal_code = $('#postal_code');
    cmp_postal_code.mask(cmp_postal_code.attr('data-mask'));

    $('#country').countries({
        onChange: function(country_id){
            $('#state').ufs({
                country_id: country_id,
                onChange: function(uf_id){
                    $('#city').cidades({uf: uf_id});
                }
            });
        }
    });

    if(cmp_postal_code.attr('data-autocomplete'))
    {
        cmp_postal_code.findAddressByCep()
    }

})

$.fn.findAddressByCep = function() {
    var input = $(this);

    var settings = $.extend({
        'onBlur': function(){
            $('#street').val('loading...');
            $('#district').val('loading...');

            var postal_code = input.val().toString().replace('-','');

            $.get("http://viacep.com.br/ws/"+postal_code+"/json/", null, function (json) {

                /**
                 *   RETURN VIACEP.COM.BR FOR BRAZIL
                 *
                 *   {
                 *     "cep": "01001-000",
                 *     "logradouro": "Praça da Sé",
                 *     "complemento": "lado ímpar",
                 *     "bairro": "Sé",
                 *     "localidade": "São Paulo",
                 *     "uf": "SP",
                 *     "unidade": "",
                 *     "ibge": "3550308",
                 *     "gia": "1004"
                 *   }
                 */

                $('#street').val(json.logradouro);
                $('#district').val(json.bairro);
                $('#number').focus();

            }, 'json');
        }
    });

    input.blur(function(){
        settings.onBlur(input.val());
    });

}

$.fn.countries = function(options) {

    var select = $(this);

    var settings = $.extend({
        'default': select.attr('data-default'),
        'onChange': function(id){}
    }, options );

    $.get("/countries-list", null, function (json) {

        select.empty();
        $.each(json, function (key, value) {
            select.append('<option value="' + value.id + '" '+(settings.default==value.id?'selected':'')+'>' + value.code_iso2 + ' - ' + value.name + '</option>');
        })

        settings.onChange(select.val());


    }, 'json');

    select.change(function(){
        settings.onChange(select.val());
    });
};

$.fn.ufs = function(options) {

    var select = $(this);

    var settings = $.extend({
        'default': select.attr('data-default'),
        'onChange': function(uf){}
    }, options );

    $.get("/states-list/"+options.country_id, null, function (json) {

        select.empty();
        select.html('<option value="">Selecione</option>');
        $.each(json, function (key, value) {
            select.append('<option value="' + value.id + '" '+(settings.default==value.id?'selected':'')+'>' + value.name + '</option>');
        })

        settings.onChange(select.val());

    }, 'json');

    select.change(function(){
        settings.onChange(select.val());
    });
};


$.fn.cidades = function(options) {

    var select = $(this);

    var settings = $.extend({
        'default': select.attr('data-default'),
        'uf': null
    }, options );

    if(settings.uf == null)
        console.warn('Nenhuma UF informada');
    else{

        select.html('<option>Carregando..</option>');

        $.get("/cities-list/"+options.uf, null, function (json) {
            select.empty();
            select.html('<option value="">Selecione</option>');
            $.each(json, function (key, value) {
                select.append('<option value="' + value.id + '" '+((settings.default==value.id || settings.default==value.id)?'selected':'')+'>' + value.name + '</option>');
            })

        }, 'json');


    }
};