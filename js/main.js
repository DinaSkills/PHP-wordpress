
function openMenu() {
  var x = document.getElementById("myLinks");
  var icon = document.getElementById("icon");
  if (x.style.display === "block") {
    x.style.display = "none";
    icon.classList.remove("close");

  } else {
    x.style.display = "block";
    icon.classList.add('close');
  }
}

window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("topnav");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}