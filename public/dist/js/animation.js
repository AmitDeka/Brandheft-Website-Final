gsap.registerPlugin(ScrollTrigger);

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

// Hero section 
gsap.from(".heroText", {
    opacity: 0,
    duration: 1,
    delay: 3,
    y: 100,
    ease: Expo.easeIn
})

gsap.from(".section_content", {
    y: 50,
    opacity: 0,
    duration: 2,
    scrollTrigger: {
        trigger: ".section_container",
        start: "top 50%",
        end: "bottom 50%",
        // markers: true,
        toggleActions: "play reverse restart reverse"
    }
})

gsap.from(".section_text_slide", {
    opacity: 0,
    x: -100,
    duration: 2,
    scrollTrigger: {
        trigger: ".section_container_text",
        start: "top 60%",
        end: "bottom 50%",
        // markers: true,
        toggleActions: "play reverse restart reverse"
    }
})

gsap.from(".service_container-slide-y1", {
    y: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".service_container",
        start: "top 70%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play reverse restart reverse"
    }
})
gsap.from(".service_container-slide-y2", {
    y: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".service_container",
        start: "top 60%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play reverse restart reverse"
    }
})
gsap.from(".service_container-slide-y3", {
    y: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".service_container",
        start: "top 50%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play reverse restart reverse"
    }
})

// gsap.from(".service_container-slide-x", {
//     x: 100,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: ".service_container",
//         start: "top 60%",
//         end: "center 20%",
//         // markers: true,
//         toggleActions: "play reverse restart reverse"
//     }
// })

// gsap.from(".service_container-slide-y", {
//     y: 100,
//     opacity: 0,
//     duration: 1,
//     scrollTrigger: {
//         trigger: ".service_container",
//         start: "top 60%",
//         end: "center 20%",
//         // markers: true,
//         toggleActions: "play reverse restart reverse"
//     }
// })

gsap.from(".client-content", {
    y: 50,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".client-container",
        start: "top 50%",
        end: "bottom 40%",
        // markers: true,
        toggleActions: "play reverse restart reverse"
    }
})
