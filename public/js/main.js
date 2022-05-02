$(".owl-one").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoHeight: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 2,
        },
    },
});

$(".owl-two").owlCarousel({
    loop: true,
    margin: 50,
    nav: true,
    autoplayTimeout: 3000,
    autoplay: true,
    items: 5,
    responsive: {
        0: {
            items: 1,
            margin: 30,
        },
        611: {
            items: 2,
            margin: 30,
        },
        991: {
            items: 4,
        },
        1199: {
            items: 5,
        },
    },
});
setInterval(5000);

$(".owl-three").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoHeight: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        },
    },
});

$(".owl-four").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        },
    },
});
