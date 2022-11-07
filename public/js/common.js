$(function() {
    
    $('.js_custom_email').on('click', function(){
        var form_id = $(this).attr('data-form-id');
        
        $('#partner_popup input[name="form_id"]').val(form_id);
    });
    
    
    $('.noclick').on('click', function(e){
        e.preventDefault();
    })
    
    
    $('.js_tovar_btn').on('click', function(){
        var tovar_name = '';
        if ($(this).data('product-name')) {
            tovar_name = $(this).data('product-name');
        }
        $('input[name="tovar_name"]').attr('value', tovar_name);
    });
    
    
    // lazyload
    lazyload();
    $(document).on('mse2_load', function(e, data) {
        lazyload();
    });
    
    
    //lazy youtube
    ( function() {

        var youtube = document.querySelectorAll( ".youtube" );
        for (var i = 0; i < youtube.length; i++) {
            var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/0.jpg";
            var image = new Image();
                    image.src = source;
                    image.addEventListener( "load", function() {
                        youtube[ i ].appendChild( image );
                    }( i ) );   
        };
        
    } )();

	// прижать футер если не работают флексы
	function fixedFooter(){
		if($('html').hasClass('no-flexbox')){
			var bodyHeight = $('body').outerHeight(),
				 windowHeight = $(document).outerHeight(),
				 mainHeight = $('.main').outerHeight();
				 
			if(bodyHeight < windowHeight) {
				var mainAddHeight = windowHeight - bodyHeight;
				$('.main').css('height', mainHeight + mainAddHeight);
			}
		}
	}
	fixedFooter();
    
    //no dragging img
	$("img, a").on("dragstart", function(event) { event.preventDefault(); });
    
    //фиксированный header и мобильное меню
    function onResize() {
        headerHeight = $('header:not(.fixed)').outerHeight();
    };
    var doit;
    doit = setTimeout(onResize, 400);
    
    window.onresize = function() {
      clearTimeout(doit);
      doit = setTimeout(onResize, 400);
    };
    
    var headerHeight = $('header:not(.fixed)').outerHeight();
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > headerHeight) {
            $('.header-fix').addClass('fixed');
        } else if ($(this).scrollTop() < headerHeight) {
            $('.header-fix').removeClass('fixed');
        }
    });
    $('#mob-menu-list').mmenu({
        navbar : {
            title: 'Меню'
        }
    });
    var api = $("#mob-menu-list").data( "mmenu" );
    
    api.bind( "openPanel:finish", function( $panel ) {
        $('footer').addClass('when_menu_open');
        console.log('open');
    });
    api.bind( "closePanel", function( $panel ) {
        $('footer').removeClass('when_menu_open');
        console.log('close');
    });
    
    //fixed search
    $('.search-btn-trigger').click(function(e) {
        e.preventDefault();
		$('html, body').animate({scrollTop: 0},500);
        setTimeout(function() {
            $('#form-top-search').focus();
        }, 500);
		return false;
	})
    
    //mask on input phone
	$('[name="phone"]').mask("+7(999) 999-99-99");
    
    //animate placeholder
    var show = 'show';

    $('input, textarea').on('checkval', function () {
        var label = $(this).next('label');
        if(this.value !== '') {
            label.addClass(show);
        } else {
            label.removeClass(show);
        }
    }).on('keyup', function () {
        $(this).trigger('checkval');
    }); 
    
    //label trigger
    $('.inp-wp label').click(function (e) {
        $(this).siblings('input').focus();
    });
    
    //toggle lang
    $('.lang-btn').click(function() {
        $('.lan-list').toggleClass('open');
        $(this).toggleClass('active');
    });
    $('.lan-list li').click(function() {
        var flag = $(this).data('flagIco');
        var ths_text = $(this).text();
        $('.lang-btn img').attr('src', flag);
        $('.lang-btn i').text(ths_text);
        $('.lan-list').removeClass('open');
        $('.lang-btn').removeClass('active');
    });
    
    // hide block on click not elems
	$(document).bind('mouseup touchend', function (e){
		var elem1 = $('.lan-list');
		if ( (!elem1.is(e.target) && elem1.has(e.target).length === 0) ){
			$('.lan-list').removeClass('open');
            $('.lang-btn').removeClass('active');
		}
	});
    
    //btn-menu header
    $('.nav-icon1').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('open');
        $('.mob-menu').fadeToggle(500);
        $('body').toggleClass('no-scroll');
    });
    
    //mobile-info-block toggle
    $('.toggle-btn').click(function (e) {
        e.preventDefault();
        $(this).parent('.mobile-info-block').toggleClass('open');
        $(this).toggleClass('active-btn');
    });
    
    //toggle question
    $('.ques-title-toggle').click(function (e) {
        e.preventDefault();
        $(this).parent('.question-item').toggleClass('open');
        $(this).toggleClass('active-btn');
    });
    //toggle checkbox
    $('.trigger-filter-title').click(function (e) {
        e.preventDefault();
        $(this).next('.checkbox-toggle-list').toggleClass('open');
        $(this).toggleClass('active-btn');
    });
    //hidden excess checkbox
    $('.checkbox-toggle-list').each(function(i, e) {
        $(e).find('.check-item').each(function(index, element) {
            if(index > 5) {
                $(this).addClass('hidden toggle');
                $(this).next('.check-item').addClass('hidden toggle');
                $(this).siblings('.more-check').removeClass('hidden');
            }
        });
    });
    //toggle more checkbox
    $('.more-check').click(function (e) {
        e.preventDefault();
        $(this).siblings('.check-item.toggle').toggleClass('hidden');
        this.textContent = this.textContent === 'Еще' ? 'Скрыть' : 'Еще';
        $(this).toggleClass('active-btn');
    });
    
    //sidebar menu toggle
    $('li.parent .trigger-arrow').click(function (e) {
        e.preventDefault();
        $(this).parent().parent('li.parent').toggleClass('active');
    });
    
    //tovar slide description
    $('.trigger-title').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).siblings('.tovar-slide-text').toggleClass('open-slide-text');
    });
    
    //tabs init
    $(function () {
        $('.section-tabs').elitTabs({
            'useCookie': false
        });
    });
    //toggle-checkbox container on mobile
    $('.mob-filter-btn').click(function (e) {
        e.preventDefault();
        $('.checkbox-toggle-list').each(function(index, elem) {
            $(elem).removeClass('open');
        });
    });
    
    //overlay menu
    $('.overley-open-btn').click(function (e) {
        e.preventDefault();
        $('.overlay-menu').fadeToggle(400);
        $('body').toggleClass('no-scroll');
    });
    $('.overley-close-btn').click(function (e) {
        e.preventDefault();
        $('.overlay-menu').fadeToggle(400);
        $('body').toggleClass('no-scroll');
    });
    
    //form-styler
    $('input, select').styler();
    
    //carousel
    $('.artl-carousel').addClass('owl-carousel').owlCarousel({
        loop: true,
        margin: 24,
        lazyLoad:true,
        nav: true,
        navText: [],
        navClass: ['arrow-left', 'arrow-right'],
        dots: true,
        items:3,
        responsive:{
            0:{
                items:1,
                nav: true
            },
            560:{
                items:1,
                nav: true
            },
            767:{
                items:1,
                nav: true
            },
            992:{
                items:1,
                nav: true
            },
            1200:{
                items:1,
                nav: true
            }
        }
    });
    
    //carousel
    $('.top-carousel').addClass('owl-carousel').owlCarousel({
        loop: true,
        margin: 24,
        lazyLoad:true,
        nav: false,
        navText: [],
        navClass: ['arrow-left', 'arrow-right'],
        dots: true,
        items:3,
        autoplay: true,
        autoplayTimeout: 4000,
        animateOut: 'fadeOut',
        responsive:{
            0:{
                items:1,
                nav: false
            },
            560:{
                items:1,
                nav: false
            },
            767:{
                items:1,
                nav: false
            },
            992:{
                items:1,
                nav: false
            },
            1200:{
                items:1,
                nav: false
            }
        }
    });
    
    $('.base-article-carousel').addClass('owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        lazyLoad:true,
        nav: true,
        navText: [],
        navClass: ['arrow-left', 'arrow-right'],
        dots: false,
        items:4,
        responsive:{
            0:{
                items:1,
                nav: true
            },
            560:{
                items:2,
                nav: true
            },
            767:{
                items:3,
                nav: true
            },
            992:{
                items:3,
                nav: true
            },
            1200:{
                items:4,
                nav: true
            }
        }
    });
    
    $('.big-article-carousel').addClass('owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        lazyLoad:true,
        nav: true,
        navText: [],
        navClass: ['arrow-left', 'arrow-right'],
        dots: false,
        items:5,
        responsive:{
            0:{
                items:1,
                nav: true
            },
            560:{
                items:2,
                nav: true
            },
            767:{
                items:3,
                nav: true
            },
            992:{
                items:3,
                nav: true
            },
            1200:{
                items:5,
                nav: true
            }
        }
    });
    
    //show search
    $('.search-btn').click(function(e) {
        //e.preventDefault();
        $('.search-inp').toggleClass('sh-show');
    });
    
    // hide block on click not elems
	$(document).bind('mouseup touchend', function (e){
        var elem1 = $('.search-inp');
        if ( (!elem1.is(e.target) && elem1.has(e.target).length === 0) ){
			$('.search-inp').removeClass('sh-show');
		}
	});
    $('.close-search-btn').click(function(e) {
        e.preventDefault();
        $('.search-inp').toggleClass('sh-show');
    });
   
    
    //fancybox init
    $('.fancybox').fancybox({
        'autoScale': true,
        'touch': false,
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',
        'speedIn': 500,
        'speedOut': 300,
        'autoDimensions': true,
        'centerOnScroll': true
    });

    $('.mob-menu .arrow-open').click(function (event) {
        $(this).parent('li').children('ul').slideToggle(500);
        $(this).toggleClass('arrow-rev');
    });
    //переключатель изображений для разных фасовок
    var packingImg = {
        options : {
            parentImgSelector: '.tovar-image',//обертка картинки товара
            itemBtnSelector:'[data-packing]',//обертка иконки фасовки
            appendImgClass:'tovar-image-append',//класс для вставляемой картинки
            wrappSourceSelector:'.wrap-image-packing'//обертка блоков с изображениями для фасовок
        },
        init : function(){
            this.defImg = this.curImg = $(this.options.parentImgSelector).find('img').attr('src');
            //вешаем обработчик клика по иконке
            $(this.options.itemBtnSelector).on('click', function(){
                var src = packingImg.getSrc($(this).data('packing'));
                packingImg.removeImg(packingImg.curImg);
                if(src){
                    packingImg.appendImg(src);
                    packingImg.curImg = src;
                }else{
                    packingImg.appendImg(packingImg.defImg);
                    packingImg.curImg = packingImg.defImg;
                }
            });
            $(this.options.itemBtnSelector).each(function(){
                var src = packingImg.getSrc($(this).data('packing'));
                if(src){
                    $(this).addClass('packing-active').attr('title', 'Кликните для просмотра изображения');  
                }
            });
        },
        getSrc: function(id){
            var result = $(this.options.wrappSourceSelector).find('#'+id).data('src');
            return result;
        },
        appendImg: function(src){
            $(this.options.parentImgSelector).append($('<img>', {
                'src': src,
                'class':  packingImg.options.appendImgClass
            }));
        },
        removeImg: function(src){
            $(this.options.parentImgSelector).find('[src="'+src+'"]').remove();
        }
        
    }
    packingImg.init();
});