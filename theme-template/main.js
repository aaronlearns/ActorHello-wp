// Dynamic styling for navbar links
function highlightCurrentPageLink() {
  let navLinks = document.getElementsByClassName("navlink");
  for (let n = 0; n < navLinks.length; n = n + 1) {
    let link = navLinks[n].getAttribute("href");
    // console.log("Trying for a link at" . n);
    if (window.location.href.includes(link)) {
      // console.log("Found a link at". n);
      navLinks[n].classList.add("clicked");
    }
    else {
      // console.log("No link found");
      continue;
    }
  }
}

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

// Controls the sticky navbar
function stickyNavbar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

window.onload = function () {highlightCurrentPageLink(); console.log("Calling highlight function");};
window.onscroll = function() {stickyNavbar()};