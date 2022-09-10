$(document).ready(function ($) {

    // Review filters
    var checkBoxesContainer = $('#checkboxes-list'),
        allCheckboxes = checkBoxesContainer.find('.jq-checkbox'),
        items = $('#mse2_results .item');

    checkBoxesContainer.find('input[type=checkbox]').change(function () {
        var mainBlock = $('#mse2_results');
        mainBlock.fadeOut('fast',function () {
            var oneOfChecked = false;

            allCheckboxes.each(function () {
                var checked = $(this).hasClass('checked'),
                    segmentId = $(this).find('input[type=checkbox]').attr('id');

                if (checked) {
                    oneOfChecked = true;
                    items.each(function () {
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

            if (!oneOfChecked) items.removeClass('hidden');
            mainBlock.fadeIn('fast');
        });
    });
});