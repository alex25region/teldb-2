// $(function() {
//     $('#search').keyup(function () {
//         var rex = new RegExp($(this).val(), 'i');
//             $('.searchable').hide();
//             $('.searchable').filter(function () {
//                 return rex.test($(this).text());
//             }).show().parent().prevUntil('tbody').find('.searchable').show();
//     });
// });

//-----------------------------------------------------------------------------------
// Живой поиск по таблице
$(document).ready(function() {
    $(function () {
        $('#search').keyup(function () {
            var rex = new RegExp($(this).val(), 'i');
            var search = $(this).val();

            $('.searchable').hide();
            var len = $('.searchable:contains("'+search+'")').length;
             //console.log(len);
            if (len > 0) {
                $('.searchable').filter(function () {
                    return rex.test($(this).text());
                }).show().parent().prevUntil('tbody').find('.searchable').show();
                $('.notfound').hide();
            }
            else {
                $('.notfound').show();
            }
        });
    })
});
$.expr[":"].contains = $.expr.createPseudo(function(arg) {
    return function( elem ) {
        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
});
//-----------------------------------------------------------------------------------
// Очистка строки поиска (сброс поиска)
$("#clear").on("click", function(){
    //code here
    console.log('asdasdad');
    $('#searchform')[0].reset();
    $('.searchable').show();
    $('.notfound').hide();
});
