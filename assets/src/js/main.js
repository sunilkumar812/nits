import "../css/main.css";
import 'swiper/css/bundle'; 
import 'lenis/dist/lenis.css'
import 'aos/dist/aos.css';

import Swiper from 'swiper/bundle';
import Lenis from 'lenis';
import AOS from 'aos';
import Marquee3k from 'marquee3000';
import gsap from "gsap";
import { ScrollTrigger, Draggable, MotionPathPlugin, Observer, DrawSVGPlugin } from "gsap/all";
gsap.registerPlugin(ScrollTrigger, Draggable, Observer, MotionPathPlugin, DrawSVGPlugin); 

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
  nav.classList.toggle('opacity-100');
  nav.classList.toggle('pointer-events-none');
  nav.classList.toggle('pointer-events-auto');

  toggleClass('.menu-toggle-open', 'hidden');
  toggleClass('.menu-toggle-close', 'hidden');
}
// function toggleMobileMenu() {
//   const nav = document.querySelector('.main-mobile-nav');
//   const body = document.body;
  
//   // Toggle menu visibility
//   nav.classList.toggle('opacity-0');
//   nav.classList.toggle('opacity-100');
//   nav.classList.toggle('pointer-events-none');
//   nav.classList.toggle('pointer-events-auto');
  
//   // Toggle menu button icons
//   toggleClass('.menu-toggle-open', 'hidden');
//   toggleClass('.menu-toggle-close', 'hidden');
  
// }

// Close menu when clicking on a link (optional)
// document.querySelectorAll('#primary-menu-mobile a').forEach(link => {
//   link.addEventListener('click', toggleMobileMenu);
// });
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

  var caseStudy = new Swiper(".caseStudySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
  });

  var about_us_intro = new Swiper(".about_us_intro", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: false,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    breakpoints: {
      300: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 3,
    },
  },
  });

  var founder = new Swiper(".founder", {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: false,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      300: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 1,
    },
    1024: {
      slidesPerView: 1,
    },
  },
    loop: true,
  });



  // const scroller = document.querySelector(".scroller");
  // const totalScroll = scroller.scrollWidth - window.innerWidth;

  // gsap.to(scroller, {
  //   x: () => `-${totalScroll}px`,
  //   ease: "none",
  //   scrollTrigger: {
  //     trigger: "#horizontal-scroll",
  //     start: "top top",
  //     end: () => `+=${totalScroll}`,
  //     scrub: true,
  //     pin: true,
  //     anticipatePin: 1,
  //     invalidateOnRefresh: true // recalc on resize
  //   }
  // });
  const scroller = document.querySelector(".scroller");

function setupHorizontal() {

  const totalScroll = scroller.scrollWidth - window.innerWidth;

  gsap.to(scroller, {
    x: () => `-${totalScroll}px`,
    ease: "none",
    scrollTrigger: {
      trigger: "#horizontal-scroll",
      start: "top-=300 top",          
      end: () => `+=${totalScroll + window.innerHeight}`,
      scrub: true,
      pin: true,
      pinSpacing: true,                      
      anticipatePin: 1,
      invalidateOnRefresh: true
    }
  });
}

setupHorizontal();

window.addEventListener("resize", () => {
  ScrollTrigger.getAll().forEach(t => t.kill()); // reset
  setupHorizontal(); // reinit
});


  
  // const cardsContainerId = document.getElementById('stackcards-containerId');
  // const cardsContainer = gsap.utils.toArray(".stackcards-container");
  // const cards = gsap.utils.toArray(".stackcard");
  // const cardsContainerHeight = cardsContainerId.offsetHeight;

  // if (cardsContainerId) {
  // cards.forEach((card, index) => {
  //   const remainingCards = cards.length - index - 1;
  //   const tween = gsap.to(card, {
  //     scrollTrigger: {
  //       trigger: cardsContainer,
  //       start: () => `top bottom+=100`,
  //       end: () => `top top+=40`,
  //       scrub: true,
  //       markers: false,
  //       invalidateOnRefresh: true
  //     },
  //     ease: "none",
  //     scale: () => 1 - (cards.length - index) * 0.025
  //   });
  
  //   ScrollTrigger.create({
  //     trigger: card,
  //     start: "top top+=200",
  //     pin: true,
  //     pinSpacing: false,
  //     markers: false,
  //     id: 'pin',
  //     end: 'max',
  //     invalidateOnRefresh: true,
  //   });
  // });
  // }
// console.clear();

// gsap.registerPlugin(ScrollTrigger, DrawSVGPlugin, MotionPathPlugin);

// gsap.set(".pathBall", {xPercent: -50, yPercent: -50});

// var dir;
// var prog = 0;
// var action = gsap.timeline({defaults: {duration: 1, ease:'none' },
//   scrollTrigger: {
//     trigger: "#path",
//     scrub:0,
//     start: "top top",
//     end: "bottom +=220%", // new
//     onUpdate: self => { 
//       prog = self.progress.toFixed(2);
//       console.log(prog);
//     } // new: info for position
//   }})
// .fromTo(".pathLine", {drawSVG: "100% 100%"}, {drawSVG: "0% 100%"}, 0)
// .from(".pathBall", {motionPath: {path: ".pathLine", align: ".pathLine", offsetX:0, offsetY:0,  }}, 0)

// .to('#wrap', {y:'+=200',duration:0.25,},0)
// .to('#wrap', {y:'-=40',duration:0.05,},0.40)
// .to('#wrap', {y:'-=800',duration:0.2,},0.5)
// .to('#wrap', {y:'-=50',duration:0.2,},0.60)
// .to('#wrap', {y:'-=500',duration:0.2,},0.80)
// const fillElement = document.querySelector("#fill-element");
    
//     // Create the fill animation
//     gsap.to(fillElement, {
//       fill: "#1a73e8", // Blue color
//       ease: "none",
//       scrollTrigger: {
//         trigger: "body", // Use the body as trigger for full page scroll
//         start: "top top",
//         end: "bottom bottom",
//         scrub: true, // Smooth scrubbing effect
//         markers: true // Remove in production
//       }
//     });
});
(function($) {
  $(document).ready(function() {
      // Add Tailwind classes to pagination elements
      $('.pagination-wrapper a.page-numbers').not('.prev, .next, .dots').addClass(
          'inline-flex items-center justify-center w-10 h-10 rounded text-sm font-medium ' +
          'text-gray-700 border border-gray-200 hover:bg-gray-100 hover:text-blue-600 ' +
          'transition-colors duration-300'
      );
      
      $('.pagination-wrapper span.page-numbers.current').addClass(
          'inline-flex items-center justify-center w-10 h-10 rounded text-sm font-medium ' +
          'bg-blue-600 text-white border-blue-600'
      );
      
      $('.pagination-wrapper a.prev, .pagination-wrapper a.next').addClass(
          'px-3 py-2 text-sm font-medium text-gray-700 hover:text-blue-600'
      );
      
      $('.pagination-wrapper .dots').addClass('pointer-events-none');

      // Fix click handler for number links
      $(document).on('click', '.pagination-wrapper a.page-numbers', function(e) {
          // Only prevent default if it's a scroll-trigger link
          if ($(this).find('.scroll-trigger').length || $(this).hasClass('scroll-trigger')) {
              e.preventDefault();
              var href = $(this).attr('href');
              if (href) {
                  window.location.href = href;
              }
          }
          // Let normal pagination links work as usual
      });

      // Scroll to container on pagination load
      if (window.location.hash === '#post-listing-container') {
          $('html, body').animate({
              scrollTop: $('#post-listing-container').offset().top - 100
          }, 100);
      }
  });
})(jQuery);