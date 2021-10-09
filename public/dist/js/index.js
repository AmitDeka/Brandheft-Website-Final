"use strict"

// Overlay 
gsap.to(".overlay h1", {
    duration: 2,
    delay: .8,
    opacity: 0,
    y: "-100%",
    ease: Expo.easeIn
})
gsap.to(".overlay span", {
    duration: 2,
    delay: 1,
    opacity: 0,
    y: "-100%",
    ease: Expo.easeIn
})
gsap.to(".overlay", {
    duration: 2,
    delay: 1.2,
    y: "-100%",
    ease: Expo.easeIn
})


// Nav toggle 
document.getElementById("hamburger").onclick = function toggleMenu() {
    const navToggle = document.getElementsByClassName("toggle");
    for (let i = 0; i < navToggle.length; i++) {
        navToggle.item(i).classList.toggle("hidden");
        // navToggle.classList.add('transition-all');
        // navToggle.classList.add('duration-300');
        // navToggle.classList.add('ease-in');
    }
};

// on scroll 
function scrollHeader() {
    const nav = document.getElementById('navBar')
    if (this.scrollY >= 50) {
        nav.classList.add('shadow-xl')
        nav.classList.remove('shadow-sm')
    } else {
        nav.classList.remove('shadow-xl')
        nav.classList.add('shadow-sm')
    }
}
window.addEventListener('scroll', scrollHeader)

// testimonial

var slide = document.getElementById("slide")
var lArrow = document.getElementById("leftArrow")
var rArrow = document.getElementById("rightArrow")

let x = 0;
lArrow.onC

// work 

$(document).ready(function () {
    $('.dataSortList').click(function () {
        const value = $(this).attr('data-filter');
        if (value == 'all') {
            $('.dataBox').show('1000');
        }
        else {
            $('.dataBox').not('.' + value).hide('1000');
            $('.dataBox').filter('.' + value).show('1000');
        }
    })
    // active item
    $('.dataSortList').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
    })
})

// Tilt
VanillaTilt.init(document.querySelectorAll(".tilt"), {
    max: 25,
    speed: 1000,
    glare: true,
    "max-glare": .7
});


// contact form submit


// var form = document.getElementById("contactForm");

// async function handleSubmit(event) {
//     event.preventDefault();
//     var status = document.getElementById("status");
//     var data = new FormData(event.target);
//     fetch(event.target.action, {
//         method: form.method,
//         body: data,
//         headers: {
//             'Accept': 'application/json'
//         }
//     }).then(response => {
//         status.classList.add("success");
//         status.innerHTML = "Thank you for getting in touch!";
//         form.reset();
//     }).catch(error => {
//         status.classList.add("error");
//         status.innerHTML = "Oops! We have encountered a problem."
//     });
// }
// form.addEventListener("submit", handleSubmit)