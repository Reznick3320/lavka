/**
 *	Oxygen Main JavaScript File
 *
 *	Theme by: www.laborator.co
 **/

var public_vars = public_vars || {};

(function($, window, undefined){

    "use strict";

    $(document).ready(function()
    {
        public_vars.$body= $('body');
        $('#sidebar-filter-quick-links-section .widgettitle').css('display', 'none');
        $('#sidebar-filter-quick-links-section .price_slider_wrapper').css('display', 'none');
        $('.sidebar-primary #woocommerce_price_filter-3').clone().appendTo('#sidebar-filter-quick-links-section .widget_price_filter');
        $('.sidebar-primary #woocommerce_price_filter-2').clone().appendTo('#sidebar-filter-quick-links-section .widget_price_filter');
        $("#billing_phone").focusout(function() {
                $('#billing_phone_field').removeClass('validate-required');
                $('#billing_phone_field').removeClass('woocommerce-validated');
        });

        $('.woof_container_inner_brands .woof_list_checkbox li').each(function() {
            if ($(this).find('.woof_checkbox_term').is(':disabled')) {
                $(this).css('display', 'none');
            }
        });


        $('#slide-menu .top-level-menu > li.menu-item-has-children > ul > li.menu-item-has-children > a').attr('href', 'javascript:;')
        $('.woocommerce.widget_product_categories > ul.product-categories > li > ul.children > li.cat-parent > a').attr('href', 'javascript:;')

        $('.woocommerce.widget_product_categories > ul.product-categories > li > ul.children > li.cat-parent > a').click(function(){
            $(this).closest('.woocommerce.widget_product_categories > ul.product-categories > li > ul.children > li.cat-parent > a').toggleClass('opened');
            $(this).next('ul.children').toggle();
        });
        $('#slide-menu .top-level-menu > li.menu-item-has-children a').click(function(){
            $(this).closest('#slide-menu .top-level-menu > li.menu-item-has-children ul > li.menu-item-has-children a').toggleClass('opened');
            $(this).next('ul > li.menu-item-has-children .sub-menu').toggle();
        });

        $("#billing_phone").focus(function() {
            $("#billing_phone").mask("+38(999) 999-9999");
        });
        if($("#billing_phone").val()){
            var value = $("#billing_phone").val();
            if(value.length===0)
                $("#billing_phone").mask("+38(999) 999-9999");
        }
        $('#filters_dropdown').click(function(){
            $('.sidebar-body').toggleClass('opened');
            $('#filters_dropdown').parent('li').toggleClass('active');
        });
        $('.flex-control-nav.flex-control-paging:eq(1)').hide();
        $('#site-header').find('.mobile-search .search-toggle').click(function(){
            $('.mobile-search-form').toggleClass('open');
        });
        $('#menu-top-nav .menu-item-has-children').each(function() {
            $(this).parents('#menu-top-nav li').addClass('dropdown');
        });
        $('#menu-top-nav .menu-item-has-children.dropdown').each(function() {
            $(this).find('.sub-menu').first().addClass('dropdown-menu menu_level_1');
            $(this).find('.sub-menu').first().removeClass('sub-menu');
        });

        $('.sidebar-primary').each(function() {
            $(this).css('display', 'block');
        });
        $('img.img-responsive').each(function() {
            $(this).appendTo($(this).prev().children());
        });
        $('.product-box.catalog.product').each(function() {
            $(this).find('.yith-wcbr-brands').insertBefore($(this).find('.productname'));
        });
        $('#product-summary-content .yith-wcbr-brands').insertBefore('.product_title.entry-title');

        $('.product-box.catalog.product').css("display", 'block');
        $('#product-summary').css("display", 'block');
        $('#header-mini-cart-component').css("display", 'block');
        if ($('#yith-s').val().length == 0) {
            // Hide the element
            $('#clear-btn').css('display', 'none');
        } else {
            // Otherwise show it
            $('#clear-btn').css('display', 'block');
        }
        $('#yith-s').keyup(function() {
            // If value is not empty
            if ($(this).val().length == 0) {
                // Hide the element
                $('#clear-btn').css('display', 'none');
            } else {
                // Otherwise show it
                $('#clear-btn').css('display', 'block');
            }
        });
        $('#clear-btn').click(function() {
            $('#clear-btn').css('display', 'none');
            $('#yith-s').val("");
        });
        $('#header-mini-cart-component').hover(function() {
            $('#header-mini-cart-component').toggleClass('opened')
        });


        // Quantity Buttons for WooCommerce 2.3.x
        var replaceWooCommerceQuantityButtons = function()
        {
            $(".quantity").each(function(i, el)
            {
                var $quantity = $(el),
                    $button = $quantity.find('.qty');

                if($quantity.hasClass('buttons_added'))
                    return;

                $quantity.addClass('buttons_added');

                $button.before('<input type="button" value="-" class="plusminus minus">');
                $button.after('<input type="button" value="+" class="plusminus plus">');
            });
        };

        replaceWooCommerceQuantityButtons();

        $("body").on('click', 'input[type="button"].plusminus', function()
        {
            var $this = $(this),
                $quantity = $this.prev(),
                add = 1;
            $( '.woocommerce-cart-form' ).find( 'input[name="update_cart"]' ).prop( 'disabled', false );

            if($this.hasClass('minus'))
            {
                $quantity = $this.next();
                add = -1;
            }

            var newVal = parseInt($quantity.val(), 10) + add;

            if(newVal <= 0)
            {
                newVal = 1;
            }

            $quantity.val(newVal);
	    $('.add_to_cart_button').attr('data-quantity', newVal);
 
        });

    });

    $( document).ajaxComplete(function() {

        if($('body').hasClass('woocommerce-cart')){
            // Quantity Buttons for WooCommerce 2.3.x
            var replaceWooCommerceQuantityButtons = function()
            {
                $(".quantity").each(function(i, el)
                {
                    var $quantity = $(el),
                        $button = $quantity.find('.qty');

                    if($quantity.hasClass('buttons_added'))
                        return;

                    $quantity.addClass('buttons_added');

                    $button.before('<input type="button" value="-" class="plusminus minus">');
                    $button.after('<input type="button" value="+" class="plusminus plus">');
                });
            };

            replaceWooCommerceQuantityButtons();

        }
    });
})(jQuery, window);


jQuery(document).ready(function(){
    jQuery('.open_search_button').click(function(){
        jQuery('.header__hidden_search').toggleClass('open');
    });


    jQuery('.mobile-header__right_col a.search-toggle').click(function(){
        jQuery(this).toggleClass('active');
    });


    jQuery('#slide-menu .icon-close').click(function(){
        jQuery('html').removeClass('open-slide-menu');
    });

    jQuery('.post__content p > iframe:only-child').parent().css('max-width', '100%');
    jQuery('.post__content p > img:only-child, .post__content a > img:only-child, .post__content p > a > img:only-child').parent().css({
        maxWidth: '100%',
        pointerEvents: 'none'
    });
});