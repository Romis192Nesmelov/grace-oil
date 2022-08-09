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

    $('form.sendLead button[type=submit]').click(function(e) {
        e.preventDefault();

        var self = $(this),
            popup = self.parents('.base-form.popup'),
            form = self.parents('form'),
            inputs = form.find('input'),
            textarea = form.find('textarea'),
            select = form.find('select'),
            radio = form.find('input[type=radio]'),
            checkboxes = form.find('input[type=checkbox]'),
            agree = form.find('input[name=i_agree]').is(':checked'),
            fields = {};
    
        if (!agree) return false;
    
        fields = processingFields(fields,inputs);
        fields = processingFields(fields,select);
        fields = processingFields(fields,textarea);
        fields = processingCheckFields(fields,radio);
        fields = processingCheckFields(fields,checkboxes);
    
        fields['_token'] = form.find('input[name=_token]').val();
        fields['i_agree'] = agree;
    
        $('.error_text').html('');
        form.find('input, select, textarea, button').attr('disabled','disabled');

        $.post(form.attr('action'), fields)
            .done(function(data) {
                closePopuo(popup.attr('id'));
                unlockAll(form);
                form.find('input, textarea').val('');
                $('#thanx_popup h1').html(data.message);

                $.fancybox.open({
                    src: '#thanx_popup',
                    type: 'inline'
                });
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                var responseMsg = jQuery.parseJSON(jqXHR.responseText),
                    replaceErr = {
                        'phone':'«Телефон»',
                        'email':'«E-mail»',
                        'user_name':'«Имя»'
                    };

                $.each(responseMsg, function (field, error) {
                    var errorMsg = error[0],
                        errorBlock = $('.input-'+field);

                    $.each(replaceErr, function (src,replace) {
                        errorMsg = errorMsg.replace(src,replace);
                    });
                    errorBlock.html(errorMsg);
                });
                unlockAll(form);
            });
    });
});

function processingFields(fields, inputObj) {
    if (inputObj.length) {
        $.each(inputObj, function (key, obj) {
            if (obj.type != 'checkbox' && obj.type != 'radio') fields[obj.name] = obj.value;
        });
    }
    return fields;
}

function processingCheckFields(fields, inputObj) {
    if (inputObj.length) {
        inputObj.each(function(){
            if($(this).is(':checked')) {
                fields[$(this).attr('name')] = $(this).val();
            }
        });
    }
    return fields;
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

function unlockAll(form) {
    form.find('input, select, textarea, button').removeAttr('disabled');
}

function closePopuo(id) {
    $.fancybox.close({src: '#'+id});
}