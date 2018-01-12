/**
 * Created by denis on 17/12/2017.
 */


$(document).ready(function () {
    $('input[type="checkbox"]').iCheck({
        checkboxClass: 'icheckbox_square-orange',
        radioClass: 'iradio_square-orange',
        increaseArea: '20%' // optional
    });
    $('select').select2({
        width: '100%'
    });
    $('.timepick').timepicker({
        showInputs: false,
        showMeridian: false,
        minuteStep: 10,

    });


    /*var clientes = new Bloodhound({
     datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
     queryTokenizer: Bloodhound.tokenizers.whitespace,
     prefetch: '/clientes',
     remote: {
     url: 'clientes/%query',
     wildcard: '%query'
     }
     });
     $('.sugerir_clientes').typeahead(null, {
     name: 'Socio',
     display: 'value',
     source: clientes,
     templates: {
     empty: function (data) {

     },
     suggestion: function (data) {

     }
     }
     });
     */


})


