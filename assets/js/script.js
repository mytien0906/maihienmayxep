// When the user scrolls the page, execute myFunction
window.onscroll = function () { myFunction() };
window.onscroll = () => window.scrollY > 200 ? scrollToTop.style.display = "block" : scrollToTop.style.display = "none"

// Get the header
var header = document.getElementById("myHeader");
var scrollToTop = document.querySelector(".scrollToTop");
// Get the offset position of the navbar
var sticky = header.offsetTop;
// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

scrollToTop.onclick = () => window.scrollTo({ top: 0, behavior: "smooth" });