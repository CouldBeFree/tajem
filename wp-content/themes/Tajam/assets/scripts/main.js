(function($) {

    $('.slider-holder').slick({
        infinite: false,
        slidesToShow: 1,
        dots: true
    });

    $('.testimonial-block').slick({
        infinite: true,
        slidesToShow: 1,
        dots: true
    });

    $('.video-section__block').poptrox();

    $('#true_loadmore').click(function(){
        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page' : current_page
        };
        $.ajax({
            url:ajaxurl,
            data:data,
            type:'POST',
            success:function(data){
                console.log(data);
                if( data ) {
                    $('#true_loadmore').text('Load more').before(data);
                    $('#target').append(data);
                    current_page++;
                    if (current_page == max_pages) $("#true_loadmore").remove();
                } else {
                    $('#true_loadmore').remove();
                }
            },
            error:function (err) {
                console.log(err);
            }
        });
    });

    var height = $('.home-section').height();
    var header = $('.page-header');

    $(window).scroll(function(){
        if ($(window).scrollTop() >= height) {
            header.addClass('fixed-nav');
            //$('nav div').addClass('visible-title');
        }
        else {
            header.removeClass('fixed-nav');
            //$('nav div').removeClass('visible-title');
        }
    });

    var $root = $('html, body');

    $('a[href^="#"]').click(function () {
        $root.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top - 70
        }, 500);

        return false;
    });

    $('.hamburger').click(function () {
        $(this).toggleClass('cross');
        $('#menu-menu').toggleClass('active');
        $('#popup').toggleClass('popup-active');
    });

    $('#popup').click(function () {
        $('#menu-menu').removeClass('active');
        $(this).removeClass('popup-active');
        $('.hamburger').removeClass('cross');
    })

})(jQuery);