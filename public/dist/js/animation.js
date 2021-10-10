gsap.registerPlugin(ScrollTrigger);

// Hero section 
gsap.from(".heroBg", {
    opacity: 0,
    duration: 2,
    delay: 2.5,
    ease: Expo.easeIn
})

gsap.from(".heroText", {
    opacity: 0,
    duration: 1,
    delay: 3,
    y: 100,
    ease: Expo.easeIn
})

// service page

gsap.from(".service_img_1", {
    x: -100,
    opacity: 0,
    duration: 2,
    scrollTrigger: {
        trigger: ".service_container_1",
        start: "top 70%",
        end: "bottom 50%",
        toggleActions: "play reverse restart reverse"
    }
});

gsap.from(".service_img_2", {
    x: 100,
    opacity: 0,
    duration: 2,
    scrollTrigger: {
        trigger: ".service_container_2",
        start: "top 70%",
        end: "bottom 50%",
        toggleActions: "play reverse restart reverse"
    }
});

gsap.from(".service_img_3", {
    x: -100,
    opacity: 0,
    duration: 2,
    scrollTrigger: {
        trigger: ".service_container_3",
        start: "top 70%",
        end: "bottom 50%",
        toggleActions: "play reverse restart reverse"
    }
});


gsap.from(".section_content", {
    y: 50,
    opacity: 0,
    duration: 2,
    scrollTrigger: {
        trigger: ".section_container",
        start: "top 50%",
        end: "bottom 50%",
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
        toggleActions: "play reverse restart reverse"
    }
})

gsap.from(".client-content", {
    y: 50,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".client-container",
        start: "top 50%",
        end: "bottom 40%",
        toggleActions: "play reverse restart reverse"
    }
})

/*------About Page start----*/
gsap.from(".about_content", {
    y: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".about_container",
        start: "top 60%",
        end: "bottom 35%",
        toggleActions: "play reverse restart reverse",
    },
});
gsap.from(".team_content", {
    opacity: 0,
    y: 100,
    duration: 1,
    scrollTrigger: {
        trigger: ".team_container",
        start: "top 60%",
        end: "bottom 40%",
        //markers: true,
        toggleActions: "play reverse restart reverse",
    },
});

gsap.from(".image-1", {
    y: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".image-1",
        start: "top 60%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play none none none",
    },
});

gsap.to(".our_core", {
    opacity: 100,
    x: 100,
    duration: 4,
    scrollTrigger: {
        trigger: ".our_core",
        start: "top 60%",
        end: "bottom 50%",
        //markers: true,
        toggleActions: "play none none none",
    },
});
gsap.from(".image-2", {
    x: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".image-2",
        start: "top 60%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play none none none",
    },
});
gsap.from(".image-3", {
    x: -100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".image-3",
        start: "top 60%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play none none none",
    },
});
gsap.to(".our_team", {
    y: 100,
    duration: 8,
    scrollTrigger: {
        trigger: ".our_team",
        start: "top 60%",
        end: "bottom 35%",
        toggleActions: "restart pause none none",
        //marker: true
    },
});
/*----about section ends here--*/

/*----Service section start here---*/
gsap.from(".img_digital", {
    y: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".img_digital",
        start: "top 60%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play none restart none",
    },
});
gsap.from(".text_market", {
    x: -100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".text_market",
        start: "top 60%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play none restart none",
    },
});
gsap.from(".our_clients", {
    y: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".our_clients",
        start: "top 60%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play none none none",
    },
});
gsap.to(".our_services", {
    y: 100,
    duration: 1,
    scrollTrigger: {
        trigger: ".our_services",
        start: "top 60%",
        end: "bottom 40%",
        scrub: true,
        toggleActions: " play  pause none none",
        pin: "true",
        marker: true,
    },
});
gsap.from(".service-define", {
    x: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".service-define",
        start: "top 60%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play none restart none",
    },
});
gsap.to(".Testimon", {
    x: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".Testimon",
        start: "top 60%",
        end: "bottom 35%",
        toggleActions: " play none restart none",
        //marker: true,
    },
});
gsap.from(".Testimonials", {
    x: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".Testimonials",
        start: "top 60%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play none reverse none",
    },
});
/*----Service section end here---*/

/*-------work section start here--*/
gsap.from(".object", {
    y: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".object",
        start: "top 60%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play none restart none",
    },
});
gsap.from(".our_work", {
    x: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".our_work",
        start: "top 60%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play none none none",
    },
});
gsap.to(".all_work", {
    x: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".all_work",
        start: "top 40%",
        end: "bottom 35%",
        toggleActions: " play none reverse none",
        //marker: true,
    },
});
gsap.from(".our_work", {
    x: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".our_work",
        start: "top 60%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play none none none",
    },
});
gsap.from(".Initiat", {
    x: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".Initiat",
        start: "top 60%",
        end: "bottom 35%",
        // markers: true,
        toggleActions: "play none rstart none",
    },
});
gsap.to(".digital_NE", {
    x: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: ".digital_NE",
        start: "top 40%",
        end: "bottom 35%",
        toggleActions: " play none reverse none",
        //marker: true,
    },
});

const tl = gsap.timeline();

tl.to(".wrapper", 5, { x: -window.innerWidth })
    .from(".section2 h2", 5, { opacity: 0, scale: 3 })
    .to(".wrapper", 5, { x: -window.innerWidth * 2 })
    .from(".section3 h2", 5, { opacity: 0, scale: 3 });

ScrollTrigger.create({
    animation: tl,
    trigger: ".wrapper",
    start: "center center",
    end: "+=4000",
    scrub: true,
    pin: true,
});