gsap.to(".overlay h1", {
    duration: 2,
    delay: .1,
    opacity: 0,
    y: "-100%",
    ease: Expo.easeIn
})
gsap.to(".overlay span", {
    duration: 2,
    delay: .3,
    opacity: 0,
    y: "-100%",
    ease: Expo.easeIn
})
gsap.to(".overlay", {
    duration: 3,
    delay: .4,
    y: "-100%",
    ease: Expo.easeInOut
})
