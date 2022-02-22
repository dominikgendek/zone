jQuery("#navbar-toggler").click(function () {
    jQuery(".menu-menu-1-container").slideToggle();
});

jQuery(".menu a").click(function () {
    var item = jQuery(jQuery(this).attr("href"));
    jQuery('html, body').animate({
        scrollTop: item.offset().top - 100
    }, 'slow');
    jQuery(".menu-menu-1-container").slideToggle();
});

jQuery('.owl-partners').owlCarousel({
    loop:true,
    autoplay: true,
    margin:124,
    nav:true,
    items: 4,
})


jQuery('.owl-personels').owlCarousel({
    loop:true,
    touchDrag :false,
    mouseDrag :false,
    margin:10,
    nav:true,
    items: 1,
})

var owl = jQuery('.owl-personels');
owl.owlCarousel();

jQuery('.owl-left').click(function(){
    owl.trigger('next.owl.carousel');
})

jQuery('.owl-right').click(function(){
    owl.trigger('prev.owl.carousel', [300]);
})