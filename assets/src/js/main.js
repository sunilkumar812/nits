import "../css/main.css";
console.log("Hello world! from main.js");
// megamenu open
// const mobileMenuLinks = document.querySelectorAll(
//   '.main-mobile-nav .menu-item-has-children'
// );
// if (mobileMenuLinks) {
//   mobileMenuLinks.forEach((mobileMenuLink) => {
//     mobileMenuLink.addEventListener('click', (e) => {    
//       e.currentTarget.classList.toggle('show');
//     });
//   });
// }
document.addEventListener('DOMContentLoaded', function () {

function toggleClass(selector, className) {
  document.querySelectorAll(selector).forEach(el => {
    el.classList.toggle(className);
  });
}

function toggleMobileMenu() {
  const nav = document.querySelector('.main-mobile-nav');
  nav.classList.toggle('opacity-0');
  //nav.classList.toggle('opacity-100');
  //nav.classList.toggle('pointer-events-none');
  //nav.classList.toggle('pointer-events-auto');

  toggleClass('.menu-toggle-open', 'hidden');
  toggleClass('.menu-toggle-close', 'hidden');
}

const menuToggle = document.querySelector('.menu-toggle');
if (menuToggle) {
  menuToggle.addEventListener('click', toggleMobileMenu);
}


  const menu = document.getElementById('primary-menu-mobile');

  if (!menu) return;

  menu.querySelectorAll('.menu-item-has-children > a').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();

      const parentLi = link.parentElement;
      const subMenu = parentLi.querySelector('.sub-menu');

      if (!subMenu) return;

      // Close sibling submenus at the same level
      parentLi.parentElement.querySelectorAll('.sub-menu').forEach(menu => {
        if (menu !== subMenu) {
          menu.classList.remove('open');
        }
      });

      // Toggle current submenu
      subMenu.classList.toggle('open');

      // Toggle icon rotation if exists
      const icon = link.querySelector('.rotate-icon');
      if (icon) icon.classList.toggle('open');
    });
  });
});

