const { gsap } = require("gsap/dist/gsap");
const { ScrollTrigger } = require("gsap/dist/ScrollTrigger");

gsap.registerPlugin(ScrollTrigger);

gsap.to(".overlay h1", {
    duration: 2,
    opacity: 0,
    y: "-100%",
    ease: Expo.easeIn
})
gsap.to(".overlay span", {
    duration: 2,
    delay: .4,
    opacity: 0,
    y: "-100%",
    ease: Expo.easeIn
})
gsap.to(".overlay", {
    duration: 2,
    delay: .8,
    y: "-100%",
    ease: Expo.easeInOut
})

// Nav toggle 
document.getElementById("hamburger").onclick = function toggleMenu() {
    const navToggle = document.getElementsByClassName("toggle");
    for (let i = 0; i < navToggle.length; i++) {
        navToggle.item(i).classList.toggle("hidden");
    }
};

// on scroll 
function scrollHeader() {
    const nav = document.getElementById('navBar')
    if (this.scrollY >= 50) {
        nav.classList.add('shadow-md')
        nav.classList.remove('shadow-sm')
    } else {
        nav.classList.remove('shadow-md')
        nav.classList.add('shadow-sm')
    }
}
window.addEventListener('scroll', scrollHeader)