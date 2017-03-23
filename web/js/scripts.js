$(document).ready(function(){
    if ($('.bxslider.vertical').length) {
        $('.site-index .bxslider.vertical').bxSlider({
            'mode': 'vertical',
            'adaptiveHeight': true,
            'auto': true,
            'pause': 3000,
            'autoHover': true,
            'controls': false
        });
        setTimeout(function () {
            if ($(window).width() < 680) {
                $('.site-index .bx-wrapper .bx-pager').css('padding-top', $('.site-index .bx-wrapper img').height() / 2 - 30)
            }
            else {
                $('.site-index .bx-wrapper .bx-pager').css('padding-top', $('.site-index .bx-wrapper img').height() / 2)
            }
        }, 1000)
    }
    if ($('.flickity').length) {
        $('.product.flickity').flickity({
            cellAlign: 'left',
            contain: true,
            pageDots: false,
            // groupCells: 3
        });
    }

    $('.product.flickity').css('display', 'none')

    $('.navbar-toggle').click(function () {
        $('.product.flickity').css('display', 'none')
        $('.navbar-inverse').css('background-color', '#222')
    })


    if ($(document).width() < 764) {
        $('.navbar-inverse').css('background-color', '#222')
        $('.wrap > .main-content').css('padding-top', '95px')
        $('#menu-product').click(function (e) {
            e.preventDefault()
            $('.navbar-toggle').click()
            $('.product.flickity').css('display', 'block')
        })
        $('body .wrap .main-content').click(function () {
            $('.product.flickity').css('display', 'none')
        })
    }
    else {
        $('#menu-product').hover(function () {
            $('.product.flickity').css('display', 'block')
        })
        $('body .wrap .main-content').hover(function () {
            $('.product.flickity').css('display', 'none')
        })
        $('.navbar-inverse .navbar-nav li a:not(#menu-product)').hover(function () {
            $('.product.flickity').css('display', 'none')
        })
        $(window).scroll(function(){
            var st = $(this).scrollTop();
            if (st > 50){
                $('.navbar-inverse').css('background-color', '#222')
            } else {
                $('.navbar-inverse').css('background-color', 'transparent')
            }
        })
    }
})