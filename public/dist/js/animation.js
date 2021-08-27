// import { gsap , Tw} from "gsap";
import { gsap } from "gsap/dist/gsap";

import { ScrollTrigger } from "gsap/ScrollTrigger";

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
