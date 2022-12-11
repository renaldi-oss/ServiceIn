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
gsap.from('#sidebar', {duration: 1, x:'-100%', opacity: 0});
gsap.from('#typed-strings', {duration: 1, x: -50, opacity: 0, delay: 0.5, ease:'back'});

gsap.from('#serviceIN', {duration: 2, x: -50, opacity: 0, delay: 0.5, ease:'in'});
