$(document).ready(function ($) {
    $(window).resize(function() {
        windowResize();
    });

    // Get search
    var findForm = $('#search-form');
    findForm.find('button').click(function (e) {
        e.preventDefault();
        location.href = '/search/'+findForm.find('input').val();
    });

    // Review filters
    var checkBoxesFiltersContainer = $('#checkboxes-list'),
        allCheckboxesFilters = checkBoxesFiltersContainer.find('.jq-checkbox'),
        itemsFilters = $('#mse2_results .item');

    checkBoxesFiltersContainer.find('input[type=checkbox]').change(function () {
        var mainBlock = $('#mse2_results');
        mainBlock.fadeOut('fast',function () {
            var oneOfChecked = false;

            allCheckboxesFilters.each(function () {
                var checked = $(this).hasClass('checked'),
                    segmentId = $(this).find('input[type=checkbox]').attr('id');

                if (checked) {
                    oneOfChecked = true;
                    itemsFilters.each(function () {
                        var item = $(this),
                            matchSegment = false,
                            reviewSegments = item.find('.review-segments');
                        
                        if (reviewSegments.length) {
                            item.find('.review-segments span').each(function () {
                                if ($(this).attr('class') == segmentId) matchSegment = true;
                            });
                        } else {
                            if (item.hasClass(segmentId)) matchSegment = true;
                        }

                        if (matchSegment && item.hasClass('hidden')) item.removeClass('hidden');
                        else if (!matchSegment && !item.hasClass('hidden')) item.addClass('hidden');
                    });
                }
            });

            if (!oneOfChecked) itemsFilters.removeClass('hidden');
            mainBlock.fadeIn('fast');
        });
    });

    setTimeout(function () {
        windowResize();
        removingLoader();
    },Math.floor(Math.random()*(30000 - 1000) + 1000));

    // Review filters catalogue
    var checkBoxesFiltersCatalogueContainer = $('#checkboxes-list-catalogue'),
        allCheckboxesFiltersCatalogue = checkBoxesFiltersCatalogueContainer.find('.jq-checkbox');

    checkBoxesFiltersCatalogueContainer.find('input[type=checkbox]').change(function () {
        addingLoader();

        var catalogueFilters = {},
            oilList = $('#oil-list');

        oilList.fadeOut('fast',function () {
            allCheckboxesFiltersCatalogue.each(function () {
                var checked = $(this).hasClass('checked'),
                    filtersBlock = $(this).parents('.checkbox-toggle-list').attr('id').replace('-filters',''),
                    filterId = $(this).find('input[type=checkbox]').val();

                if (checked) {
                    if (typeof catalogueFilters[filtersBlock] == 'undefined') catalogueFilters[filtersBlock] = [];
                    catalogueFilters[filtersBlock].push(filterId);
                }
            });

            // addingLoader();
            $.post(window.location.href, {
                '_token': $('input[name=_token]').val(),
                'filters': catalogueFilters,
                'oil_type_id': $('input[name=oil_type_id]').val(),
                'subsection_id': $('input[name=subsection_id]').val()
            }).done(function(data) {
                if (!data.oil_count) {
                    document.location.href = window.location.href.replace(/(\?page=\d+)$/g, '');
                } else {
                    oilList.html(data.html);
                    oilList.fadeIn('fast');
                    removingLoader();
                }
            });
        });
    });
});

function addingLoader() {
    var loader = $('<div></div>').addClass('loader').append($('<div></div>').addClass('loader_inner'));
    $('body').prepend(loader);
}

function removingLoader() {
    // $('body').css('overflow','auto')
    $('.loader').animate({'opacity':0},'slow',function () {
        $(this).remove();
    });
}

function windowResize() {
    maxHeight($('.service-item .descr'));
    maxHeight($('.about-comp-item .comp-item-text'));
    // var mainContainer = $('.main > .container'),
    //     body = $('body');
    // if (mainContainer.height() < 500) {
    //     body.css('overflow-y','hidden');
    //     mainContainer.css('height',(parseInt($('body').height()) - parseInt($('header').height()) - parseInt($('footer').height()) - 96));
    // } else {
    //     mainContainer.css('height','auto');
    //     body.css('overflow-y','auto');
    // }
}


function maxHeight(objs) {
    if ($(window).width() > 650) {
        var maxHeight = 0;
        objs.each(function(){
            if (maxHeight < $(this).height()) maxHeight = $(this).height();
        });
    } else {
        maxHeight = 'auto';
    }
    objs.css('height',maxHeight);

    let header = $('header'),
        middleBlock = $('.main.internal'),
        contentContainer = middleBlock.find('.container'),
        footer = $('footer'),
        headerHeight = parseInt(header.height()),
        middleBlockHeight = parseInt(middleBlock.height()),
        footerHeight = parseInt(footer.css('padding-top'))+parseInt(footer.height())+parseInt(footer.css('padding-bottom')),
        windowHeight = $(window).height();

    if (
        $(window).width() > 650 &&
        (headerHeight + middleBlockHeight + footerHeight < windowHeight)
    ) {
        contentContainer.css({
            'height':(windowHeight - headerHeight - footerHeight - 1),
            // 'position':'absolute',
        });
        footer.css({
            'position':'fixed',
            'bottom':0
        });
    } else {
        contentContainer.css({
            'height':'auto',
            // 'position':'auto',
        });
        footer.css({
            'position':'relative',
            'bottom':'auto'
        });
    }
}