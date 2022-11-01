$(document).ready(function () {
    $(window).scroll(function() {
        window.scrollY = $(this).scrollTop();
    });
});

function addingLoader() {
    var loader = $('<div></div>').addClass('loader').append($('<div></div>').addClass('loader_inner'));
    $('body').prepend(loader.css('top',window.scrollY));
}

function removingLoader() {
    $('.loader').remove();
}
