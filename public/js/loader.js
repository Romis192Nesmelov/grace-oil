addingLoader();

function addingLoader() {
    var loader = $('<div></div>').addClass('loader').append($('<div></div>').addClass('loader_inner'));
    $('body').prepend(loader.css('top',$(document).scrollTop()));
}

function removingLoader() {
    var loader = $('.loader');
    loader.fadeOut('slow',function () {
        $(this).remove();
    });
}
