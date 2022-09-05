$(document).ready(function ($) {

    // Get search
    var findForm = $('#search-form');
    findForm.find('button').click(function (e) {
        e.preventDefault();
        location.href = '/search/'+findForm.find('input').val();
    });


    // Review filters
    var checkBoxesContainer = $('.checkbox-toggle-list.review-filters'),
        allCheckboxes = checkBoxesContainer.find('.jq-checkbox'),
        reviewsItems = $('.reviews_list .item')

    checkBoxesContainer.find('input[type=checkbox]').change(function () {
        var mainBlockReviews = $('#mse2_results');
        mainBlockReviews.fadeOut('fast',function () {
            var oneOfChecked = false;

            allCheckboxes.each(function () {
                var checked = $(this).hasClass('checked'),
                    segmentId = $(this).find('input[type=checkbox]').attr('id');

                if (checked) {
                    oneOfChecked = true;

                    reviewsItems.each(function () {
                        var reviewItem = $(this),
                            matchSegment = false;

                        reviewItem.find('.review-segments span').each(function () {
                            if ($(this).attr('class') == segmentId) matchSegment = true;
                        });

                        if (matchSegment && reviewItem.hasClass('hidden')) reviewItem.removeClass('hidden');
                        else if (!matchSegment && !reviewItem.hasClass('hidden')) reviewItem.addClass('hidden');
                    });
                }
            });

            if (!oneOfChecked) reviewsItems.removeClass('hidden');

            mainBlockReviews.fadeIn('fast');
        });
    });
});