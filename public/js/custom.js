$(document).ready(function ($) {

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

    // Review filters catalogue
    var checkBoxesFiltersCatalogueContainer = $('#checkboxes-list-catalogue'),
        allCheckboxesFiltersCatalogue = checkBoxesFiltersCatalogueContainer.find('.jq-checkbox');

    checkBoxesFiltersCatalogueContainer.find('input[type=checkbox]').change(function () {
        var catalogueFilters = {},
            oneOfChecked = false;

        allCheckboxesFiltersCatalogue.each(function () {
            var checked = $(this).hasClass('checked'),
                filtersBlock = $(this).parents('.checkbox-toggle-list').attr('id').replace('-filters',''),
                filterId = $(this).find('input[type=checkbox]').val();
        
            if (checked) {
                oneOfChecked = true;
                if (typeof catalogueFilters[filtersBlock] == 'undefined') catalogueFilters[filtersBlock] = [];
                catalogueFilters[filtersBlock].push(filterId);
            }
        });

        // console.log(window.location.href);

        addingLoader();
        $.post(window.location.href, {
            '_token': $('input[name=_token]').val(),
            'filters': catalogueFilters,
            'oil_type_id': $('input[name=oil_type_id]').val(),
            'subsection_id': $('input[name=subsection_id]').val()
        }).done(function(data) {
            console.log(data);
            var oilList = $('#oil-list');
            oilList.html(data.html);
            removingLoader();
        });
    });
});