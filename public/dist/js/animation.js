gsap.registerPlugin(ScrollTrigger);

// Overlay 
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
    duration: 2,
    delay: .4,
    y: "-100%",
    ease: Expo.easeInOut
})

// Hero section 
gsap.from("#hero_data", {
    opacity: 0,
    duration: 1,
    delay: 1,
    x: 90,
    ease: Expo.easeIn
})

gsap.from(".section_title", {
    y: 30,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".section_title",
        start: "top 90%",
        end: "center 15%",
        // markers: true,
        toggleActions: "play reverse restart reverse"
    }
})

gsap.from(".section_headline", {
    y: 30,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".section_title",
        start: "top 90%",
        end: "center 15%",
        // markers: true,
        toggleActions: "play reverse restart reverse"
    }
})

gsap.from(".section_footer", {
    y: 30,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".section_title",
        start: "top 90%",
        end: "center 15%",
        // markers: true,
        toggleActions: "play reverse restart reverse"
    }
})

gsap.from(".section_image", {
    y: 30,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".section_title",
        start: "top 90%",
        end: "center 15%",
        // markers: true,
        toggleActions: "play reverse restart reverse"
    }
})

gsap.from(".section", {
    y: 30,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".section_title",
        start: "top 90%",
        end: "center 15%",
        // markers: true,
        toggleActions: "play reverse restart reverse"
    }
})

