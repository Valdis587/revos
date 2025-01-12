$(document).ready(function () {
/* ---------------------------------------------------
		Back to Top
	-------------------------------------------------- */
    $(".footer__back").addClass("hidden-top");
    $(window).scroll(function () {
    if ($(this).scrollTop() === 0) {
        $(".footer__back").addClass("hidden-top")
    } else {
        $(".footer__back").removeClass("hidden-top")
    }
});
$(".footer__back").on("click", function () {
    $('body,html').animate({scrollTop:0}, 1200);
    return false;
});

$('.shop__youtube').magnificPopup({
    type: 'iframe',
    iframe: {
      patterns: {
         youtube: {
            index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
            id: 'v=', // String that splits URL in a two parts, second part should be %id%
            src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
              },
          }
      }
  });

    $('.product-grid > .product, .shop__sidebar-carousel > .product').addClass('cart-prod-grid');
    
    $('.shop__filter-list').click(function() {
         $('.products').removeClass('product-grid');
         $('.product').removeClass('cart-prod-grid');
         $('.products').addClass('product-list'); 
         $('.product').addClass('cart-prod-list');
    });
    $('.shop__filter-grid').click(function() {
            $('.products').removeClass('product-list'); 
            $('.product').removeClass('cart-prod-list');
            $('.products').addClass('product-grid');
            $('.product').addClass('cart-prod-grid'); 
       });
       $('.add_to_cart_button,.product_type_grouped,.single_add_to_cart_button').prepend('<i class="icon-shopping-cart"></i>');
       $(".cart .quantity .qty").before('<button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown();this.nextElementSibling.onchange();">-</button>');
       $(".cart .quantity .qty").after('<button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp();this.previousElementSibling.onchange();">+</button>');

  $('.shop__img-sm-slide a').click(function (e) {
          if ($('.shop__img-big-slide img').attr('src') !== $(this).attr('href')) {
                  $('.shop__img-big-slide img').hide().attr('src', $(this).attr('href')).fadeIn(1000)
          }
          e.preventDefault()
  });

  $('.shop__quick').on('click', function () {
        $('.themeModal').addClass('themeModal-open');
         });
        
         $('.modal-close').on('click', function () {
                $('.themeModal').removeClass('themeModal-open');
                location.href = '';
         });

$('.sidebar__sub-category > i').click(function() {
        $('.sidebar__sub-menu').toggleClass('open-sidebar-category');
    
    });

    $('.header__mini-cart a').click(function() {
        $('.header__menu-primary').removeClass('open-menu');
        $('.header__menu-cat').removeClass('open-menu-cat');
        $('.woocommerce-mini-cart').toggleClass('open-woocommerce-mini-cart');
    
    });

    $('.header__menu-category-wrapp a').click(function() {
        $('.header__menu-cat').toggleClass('open-menu-cat');
        $('.header__menu-primary').removeClass('open-menu');
        $('.woocommerce-mini-cart').removeClass('open-woocommerce-mini-cart');
        
    
    });

    $('.header__burger').click(function() {
        $('.woocommerce-mini-cart').removeClass('open-woocommerce-mini-cart');
        $('.header__menu-cat').removeClass('open-menu-cat');
        $('.header__menu-primary').addClass('open-menu');
    
    });

    $('.header__menu-close').click(function() {
        $('.header__menu-primary').removeClass('open-menu');
    
    });

    $('.menu-item-has-children > i').click(function() {
        $('.sub-menu').toggleClass('open-primary-submenu');
    });

    $('.header__popup-form').on('click', function () {
        $('.themeModal2').addClass('themeModal-open2');
         });
        
         $('.modal-close2').on('click', function () {
                $('.themeModal2').removeClass('themeModal-open2');
         });
     $('..themeModal2__button').on('click', function () {
            $('.themeModal2').removeClass('themeModal-open2');
            location.href = '';
     });
     

  

 
    
     });

