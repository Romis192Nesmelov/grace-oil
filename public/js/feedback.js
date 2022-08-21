$(document).ready(function ($) {
    // window.phoneRegExp = /^((\+)?(\d)(\s)?(\()?[0-9]{3}(\))?(\s)?([0-9]{3})(\-)?([0-9]{2})(\-)?([0-9]{2}))$/gi;

    // $('input[name=phone]').keyup(function () {
    //     unlockSendButton($(this));
    // }).mask("+7(999)999-99-99",{completed:function(){
    //     unlockSendButton($(this));
    // }});

    $('input[name=i_agree]').change(function () {
        unlockSendButton($(this));
    });

    $('form.useAjax button[type=submit]').click(function(e) {
        e.preventDefault();

        var self = $(this),
            popup = self.parents('.base-form.popup'),
            form = self.parents('form'),
            inputs = form.find('input'),
            textarea = form.find('textarea'),
            select = form.find('select'),
            radio = form.find('input[type=radio]'),
            checkboxes = form.find('input[type=checkbox]'),
            file = form.find('input[type=file]'),
            agree = form.find('input[name=i_agree]').is(':checked'),
            loader = $('<div></div>').addClass('loader').append(
                $('<div></div>').addClass('loader_inner')
            );
    
        if (!agree) return false;

        var formData = new FormData;
        formData = processingFields(formData,inputs);
        formData = processingFields(formData,select);
        formData = processingFields(formData,textarea);
        formData = processingCheckFields(formData,radio);
        formData = processingCheckFields(formData,checkboxes);

        if (file.length) formData.append(file.attr('name'),file[0].files[0]);
    
        $('.error_text').html('');
        form.find('input, select, textarea, button').attr('disabled','disabled');
        $('body').prepend(loader);


        $.ajax({
            url: form.attr('action'),
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (data) {
                closePopup(popup.attr('id'));
                unlockAll(form,loader);
                form.find('input, textarea').val('');
                
                $('#thanx_popup h3').html(data.message);
                
                $.fancybox.open({
                    src: '#thanx_popup',
                    type: 'inline'
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                var responseMsg = jQuery.parseJSON(jqXHR.responseText),
                    replaceErr = {
                        'phone':'«Телефон»',
                        'email':'«E-mail»',
                        'user_name':'«Имя»'
                    };

                $.each(responseMsg, function (field, error) {
                    var errorMsg = error[0],
                        errorBlock = form.find('.input-'+field);

                    $.each(replaceErr, function (src,replace) {
                        errorMsg = errorMsg.replace(src,replace);
                    });
                    errorBlock.html(errorMsg);
                });
                unlockAll(form,loader);
            }
        });
    });
});

function processingFields(formData, inputObj) {
    if (inputObj.length) {
        $.each(inputObj, function (key, obj) {
            if (obj.type != 'checkbox' && obj.type != 'radio') {
                formData.append(obj.name,obj.value);
            }
        });
    }
    return formData;
}

function processingCheckFields(formData, inputObj) {
    if (inputObj.length) {
        inputObj.each(function(){
            var _self = $(this);
            if(_self.is(':checked')) {
                formData.append(_self.attr('name'),_self.val());
            }
        });
    }
    return formData;
}

function unlockSendButton(obj) {
    var form = obj.parents('form'),
        button = form.find('button[type=submit]'),
        checkBox = form.find('input[name=i_agree]');
        // phoneInput = form.find('input[name=phone]');

    // if (checkBox.is(':checked') && phoneInput.val().match(window.phoneRegExp)) button.removeAttr('disabled');
    if (checkBox.is(':checked')) button.removeAttr('disabled');
    else button.attr('disabled','disabled');
}

function unlockAll(form,loader) {
    form.find('input, select, textarea, button').removeAttr('disabled');
    loader.remove();
}

function closePopup(id) {
    $.fancybox.close({src: '#'+id});
}