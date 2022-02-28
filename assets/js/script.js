// When the user scrolls the page, execute myFunction
var scrollToTop = document.querySelector(".scrollToTop");
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

window.onscroll = function () { myFunction() };
scrollToTop.onclick = () => window.scrollTo({ top: 0, behavior: "smooth" });
window.onscroll = () => window.scrollY > 200 ? scrollToTop.style.display = "block" : scrollToTop.style.display = "none"
// Get the header
// Get the offset position of the navbar
// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

