
// -----------dark and light theme
var menu = document.querySelector(".ri-menu-3-line");
var cross = document.querySelector(".ri-close-large-line");
var nav = document.querySelector(".responsive-nav");

menu.addEventListener("click", function(){
    nav.style.left = "0%";
});

cross.addEventListener("click", function(){
    nav.style.left = "-100%";
});
// ---------------------------active link navbar ---------------------------


let sections = document.querySelectorAll('section');
let navlinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
  sections.forEach(sec => {
    let top = window.scrollY;
    let offset = sec.offsetTop;
    let height = sec.offsetHeight;
    let id = sec.getAttribute('id'); // You missed this!

    if (top >= offset && top < offset + height) {
      navlinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${id}`) {
          link.classList.add('active');
        }
      });
    }
  });
};









