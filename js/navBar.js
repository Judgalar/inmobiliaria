window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.documentElement.scrollTop > 1) {
        document.getElementById("navBar").style.backgroundColor = "#2D2D2D";
    } else {
        document.getElementById("navBar").style.backgroundColor = "transparent";
    }
}