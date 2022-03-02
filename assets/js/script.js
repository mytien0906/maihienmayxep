$(document).ready(function () {

    // Get the header
    var scrollToTop = document.querySelector(".scrollToTop");
    window.onscroll = () => window.scrollY > 200 ? scrollToTop.style.display = "block" : scrollToTop.style.display = "none"
    
    window.onscroll = function () { myFunction() };
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

    scrollToTop.onclick = () => window.scrollTo({ top: 0, behavior: "smooth" });

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
                slidesToScroll: 1,
                slidesToShow: 1,
                centerMode: true,
                centerPadding: 0,
            }
        }]

    });
});
