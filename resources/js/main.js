$(function() {
    $('#search').keyup(function () {
        var rex = new RegExp($(this).val(), 'i');
        $('.searchable').hide();
        $('.searchable').filter(function () {
            return rex.test($(this).text());
        }).show().parent().prevUntil('tbody').find('.searchable').show();
    });
});
