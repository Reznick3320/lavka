var $ = jQuery;


function remainClock(date) {


    var targetDate = Date.parse(date);

    setInterval(function () {
        var presentTime = new Date().getTime();

        var gap = targetDate - presentTime;
        var seconds = 1000;
        var minutes = seconds * 60;
        var hours = minutes * 60;
        var days = hours * 24;

        var d = Math.floor(gap/days);
        var h = Math.floor((gap % days) / hours);
        var m = Math.floor((gap % hours) / minutes);
        var s = Math.floor((gap % minutes) / seconds);

        $('.sale-remain__clock__item:nth-child(1) p').text(d);
        $('.sale-remain__clock__item:nth-child(2) p').text(h);
        $('.sale-remain__clock__item:nth-child(3) p').text(m);
        $('.sale-remain__clock__item:nth-child(4) p').text(s);
    }, 1000);
}

$( document ).ready( function() {
    $('.product-wrapper .product-cart__text form .input-wrapper input').focus(function() {
        $(this).attr('placeholder', '')
    }).blur(function() {
        $(this).attr('placeholder', this.nextElementSibling.innerHTML);
    })
    $('#first-slider .slider-wrapper__main-img').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '#first-slider  .slider-wrapper__nav',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    vertical: false,
                    dots:true,
                    slidesToShow:1,
                    slidesToScroll:1,
                    customPaging : function(slider, i) {
                        return '<button></button>';
                    },

                }
            }
        ]
    });
    $('#first-slider .slider-wrapper__nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '#first-slider  .slider-wrapper__main-img',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true,
        vertical:true,

    });


    $('#second-slider .slider-wrapper__main-img').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '#second-slider  .slider-wrapper__nav',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    vertical: false,
                    dots:true,
                    slidesToShow:1,
                    slidesToScroll:1,
                    customPaging : function(slider, i) {
                        return '<button></button>';
                    },

                }
            }
        ]
    });

    (function () {
        console.log($('.advantages iframe').width()*0.58);
        $('.advantages iframe').attr('height', $('.advantages iframe').width()*0.58+'px');

    })();
    $('#second-slider .slider-wrapper__nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '#second-slider   .slider-wrapper__main-img',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: true,
        vertical:true,

    });
    $('.advantages__container__item__title,.attributes__conteiner__item__title').waypoint(function() {
        $(this.element).addClass('line_show');
    }, {
        offset: '80%'
    });

    $('#third-slider-next').on('click', function() {
        $('.slider .item').scrollTop($('.slider .item').scrollTop()+100)
    });
    $('#third-slider-prev').on('click', function() {
        $('.slider .item').scrollTop($('.slider .item').scrollTop()-100)
    });
    $( '[data-fancybox]' ).fancybox({
        loop : true,
        buttons : ['close'],
        btnTpl: {
            close:
                '<button data-fancybox-close id="fancy-box-close"></button>',

            // Arrows
            arrowLeft:
                '<a id="fancy-prev" data-fancybox-prev></a>',

            arrowRight:
                '<a id="fancy-next" data-fancybox-next></a>',

        }
    });

    $('[data-single]').fancybox({
        loop : true,
        buttons : ['close'],
        btnTpl: {
            close:
                '<button data-fancybox-close id="fancy-box-close"></button>',

            // Arrows
            arrowLeft:
                '',

            arrowRight:
                '',

        }
    });
	$('.mob #fourth-slider').slick(
	{  
		dots:true,
		slidesToShow:1,
		slidesToScroll:1,
		arrows:false,
		customPaging : function(slider, i) {
			return '<button></button>';
		}

	});

});