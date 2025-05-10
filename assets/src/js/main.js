import "../css/main.css";
import 'swiper/css/bundle'; 
import 'lenis/dist/lenis.css'
import 'aos/dist/aos.css';

import Swiper from 'swiper/bundle';
import Lenis from 'lenis';
import AOS from 'aos';
import Marquee3k from 'marquee3000';
import gsap from "gsap";
import { ScrollTrigger, Draggable, MotionPathPlugin, Observer } from "gsap/all";
gsap.registerPlugin(ScrollTrigger, Draggable, Observer, MotionPathPlugin); 

// Animation
AOS.init({
  duration: 800,
  startEvent: 'DOMContentLoaded',
  once: true,
});

Marquee3k.init();

const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smooth: true,
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);


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

    
//Toggle Function
function toggleClass(selector, className) {
  document.querySelectorAll(selector).forEach(el => {
    el.classList.toggle(className);
  });
}

//Toggle mobile menu
function toggleMobileMenu() {
  const nav = document.querySelector('.main-mobile-nav');
  nav.classList.toggle('opacity-0');
  //nav.classList.toggle('opacity-100');
  //nav.classList.toggle('pointer-events-none');
  //nav.classList.toggle('pointer-events-auto');

  toggleClass('.menu-toggle-open', 'hidden');
  toggleClass('.menu-toggle-close', 'hidden');
}

// Toggle mobile menu items on click
const menuToggle = document.querySelector('.menu-toggle');
if (menuToggle) {
  menuToggle.addEventListener('click', toggleMobileMenu);
}

const menu = document.getElementById('primary-menu-mobile');

if (menu) {
  menu.querySelectorAll('.menu-item-has-children > a').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();

      const parentLi = link.parentElement;
      const subMenu = parentLi.querySelector('.sub-menu');

      if (!subMenu) return;
      parentLi.parentElement.querySelectorAll('.sub-menu').forEach(menu => {
        if (menu !== subMenu) {
          menu.classList.remove('open');
        }
      });
      subMenu.classList.toggle('open');
      const icon = link.querySelector('.rotate-icon');
      if (icon) icon.classList.toggle('open');
    });
  });
}
// Initialize Swiper Logo Slider
   const swiper = new Swiper('.brand-slider', {
    slidesPerView: 5,
    spaceBetween: 1,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },  
    breakpoints: {
        300: {
        slidesPerView: 2,
      },
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });
    
  const cardsContainerId = document.getElementById('stackcards-containerId');
  const cardsContainer = gsap.utils.toArray(".stackcards-container");
  const cards = gsap.utils.toArray(".stackcard");
  const cardsContainerHeight = cardsContainerId.offsetHeight;

  if (cardsContainerId) {
  cards.forEach((card, index) => {
    const remainingCards = cards.length - index - 1;
    const tween = gsap.to(card, {
      scrollTrigger: {
        trigger: cardsContainer,
        start: () => `top bottom+=100`,
        end: () => `top top+=40`,
        scrub: true,
        markers: false,
        invalidateOnRefresh: true
      },
      ease: "none",
      scale: () => 1 - (cards.length - index) * 0.025
    });
  
    ScrollTrigger.create({
      trigger: card,
      start: "top top+=200",
      pin: true,
      pinSpacing: false,
      markers: false,
      id: 'pin',
      end: 'max',
      invalidateOnRefresh: true,
    });
  });
  }

});

