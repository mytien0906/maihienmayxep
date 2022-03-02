$(document).ready(function () {
    window.onscroll = function () {
        myFunction();
        window.scrollY > 100 ? scrollToTop.style.display = "block" : scrollToTop.style.display = "none";
    };

    // Get the header
    var scrollToTop = document.querySelector(".scrollToTop");
    scrollToTop.onclick = () => window.scrollTo({ top: 0, behavior: "smooth" });

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }


    $('.your-class').slick({
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        centerMode: true,
        centerPadding: 0,
        responsive: [{
            breakpoint: 768,
            infinite: true,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: 0,
            }
        }]

    });
});
