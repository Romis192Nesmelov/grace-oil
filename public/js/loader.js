function addingLoader() {
    var loader = $('<div></div>').addClass('loader').append($('<div></div>').addClass('loader_inner'));
    $('body').css('overflow','hidden').prepend(loader.css('top',$(document).scrollTop()));
}

function removingLoader() {
    var loader = $('.loader');
    $('body').css('overflow','auto')
    loader.fadeOut('slow',function () {
        $(this).remove();
    });
}
