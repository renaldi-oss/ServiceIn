window.onscroll = function () {
    const nav = document.querySelector('nav');
    const fixedNav = nav.offsetTop;  
    if (window.pageYOffset > fixedNav) {
      nav.classList.add('navbar-fixed');
    } else {
      nav.classList.remove('navbar-fixed');
    }
};

gsap.from('#nav', {duration: 1, y:'-100%', opacity: 0});
gsap.from('#typed-strings', {duration: 1, x: -50, opacity: 0, delay: 0.5, ease:'back'});
// gsap.from('#name', {duration: 1, x: -50, opacity: 0, delay: 1, ease:'back'});
// gsap.from('#newbie', {duration: 1, x: -50, opacity: 0, delay: 1.5, ease:'back'});
// gsap.from('#note', {duration: 1, x: -50, opacity: 0, delay: 2, ease:'back'});
// gsap.from('#buttonHeader', {duration: 1, x: -50, opacity: 0, delay: 2.5, ease:'back'});
// gsap.from('#div_img_hero', {duration: 1, y: -30, opacity: 0, delay: 0.5, ease:'back'});
// gsap.from('#div_img_about', {duration: 1, y: -30, opacity: 0, delay: 0.5, ease:'back'});
// gsap.from('#div_img_contact', {duration: 1, y: -30, opacity: 0, delay: 0.5, ease:'back'});
