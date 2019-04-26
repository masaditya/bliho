$(function () {
    var includes = $('[data-include]');
    jQuery.each(includes, function () {
        var file = '/frontend/b2c/main/' + $(this).data('include') + '.php';
        $(this).load(file);
    });
});