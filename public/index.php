<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $title = "Home";
  include('includes/head.php');
  ?>
</head>

<body class="bg-primaryC">
  <div class="absolute top-0 flex flex-col items-center justify-center w-full h-screen overlay bg-primaryC z-999">
    <h1 class="text-5xl tracking-wider md:leading-6 font-futuraB text-accentC md:text-6xl lg:text-7xl">
      BrandHeft
    </h1>
    <span class="text-2xl tracking-widest opacity-80 md:leading-6 font-futuraL md:text-3xl lg:text-4xl text-textC">Enhancing Mission Stories</span>
  </div>

  <?php include("./includes/navbar.php") ?>

  <main>
    <!-- hero starts here -->
    <section class="relative w-full h-screen">
      <div class="container absolute left-0 right-0 flex flex-col items-center px-6 py-4 mx-auto lg:justify-center lg:py-28">
        <div class="w-full text-center md:w-1/2 heroText">
          <div class="mb-2 text-6xl font-medium tracking-wider uppercase md:text-7xl font-futuraB text-accentC">
            Enrich
          </div>
          <div class="mb-6 text-6xl font-medium tracking-wider uppercase md:text-7xl font-futuraB text-accentC">
            Your Brand
          </div>
          <div class="mb-8 text-2xl tracking-widest sm:text-4xl font-futuraL text-textC">
            Design and Marketing Solution for your Company's Vision.
          </div>
          <div class="flex justify-center">
            <a class="inline-flex px-6 py-3 text-lg border-2 rounded-full shadow text-primaryC bg-accentC border-accentC shadow-accentC focus:outline-none hover:bg-primaryC hover:text-textC" href="contact.php">Join Now</a>
          </div>
        </div>
        <div class="hidden md:block scroll-down-mouse">
          <a href="#goals" class="scroll-down">
            <div class="mouse">
              <span></span>
            </div>
            <div class="arrow">
              <span></span>
            </div>
          </a>
        </div>
      </div>
      <picture class="heroBg">
        <source media="(min-width: 1024px)" srcset="./dist/imgs/heroBanner4.png" />
        <img src="./dist/imgs/heroBannerMobile.webp" />
      </picture>
    </section>
    <!-- hero ends here -->

    <!-- goals starts here -->
    <section class="mt-10 mb-32 text-gray-600">
      <div class="container px-10 mx-auto md:px-32 section_container">
        <div class="mb-20 text-center">
          <h1 class="mb-4 text-5xl font-futuraB title-font text-textC" id="goals">
            Our Goal
          </h1>
          <div class="flex justify-center mt-6">
            <div class="inline-flex w-16 h-1 rounded-full bg-accentC"></div>
          </div>
        </div>
        <div class="flex flex-wrap -m-2 section_content">
          <div class="z-40 p-4 md:p-8 lg:w-1/3">
            <div class="card tilt">
              <img class="w-32 pb-8 mx-auto h-36" src="./dist/imgs/goal_brand.png" alt="Branding card image" />
              <h1 class="mb-3 text-3xl title-font md:text-4xl font-futuraB text-textC">
                Brand Marketing
              </h1>
              <p class="mb-3 text-xl leading-relaxed font-futuraL text-textAltC">
                We aim to provide complete branding solutions to any business
                - from strategy to printing.
              </p>
            </div>
          </div>

          <div class="z-40 p-4 md:p-8 lg:w-1/3">
            <div class="card tilt">
              <img class="w-32 pb-8 mx-auto h-36" src="./dist/imgs/goal_digital.png" alt="Digital card image" />
              <h1 class="mb-3 text-3xl title-font md:text-4xl font-futuraB text-textC">
                Digital NE
              </h1>
              <p class="mb-3 text-xl leading-relaxed font-futuraL text-textAltC">
                To support entrepreneurs and creators of the North Eastern
                part of India to build their brands.
              </p>
            </div>
          </div>

          <div class="z-40 p-4 md:p-8 lg:w-1/3">
            <div class="card tilt">
              <img class="w-32 pb-8 mx-auto h-36" src="./dist/imgs/goal_club.png" alt="Creative card image" />
              <h1 class="mb-3 text-3xl title-font md:text-4xl font-futuraB text-textC">
                Creative Club
              </h1>
              <p class="mb-3 text-xl leading-relaxed text-textAltC font-futuraL">
                To help creative individuals convert their passion into a
                thriving career and build a personal brand.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- goals ends here -->

    <!-- how we do it starts here -->

    <section class="overflow-x-hidden text-gray-600">
      <div class="container flex flex-col items-center px-10 py-24 mx-auto md:px-20 md:flex-row section_container_text">
        <div class="flex flex-col items-center mb-8 text-center lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:items-start md:text-left md:mb-0 section_text_slide">
          <h1 class="mb-8 text-6xl md:text-7xl md:mb-12 font-futuraB text-textC">
            How We Do It ?
          </h1>
          <h3 class="mb-6 text-2xl md:text-3xl md:mb-8 font-futuraL text-textAltC">
            Strategic Discussion
          </h3>
          <p class="mb-6 text-base leading-relaxed tracking-wide md:text-xl font-futuraM md:tracking-widest text-textC">
            We become the very first audience of your story, which helps us
            understand your company ideals, goals and problems. Then we come
            up with the best possible ideas and solutions to make your company
            a Brand.
          </p>
        </div>
        <div class="w-full lg:max-w-lg lg:w-full md:w-1/2 section_image_fadein">
          <img class="object-cover object-center w-auto h-auto" alt="hero" src="./dist/imgs/howwedoit.png" />
        </div>
      </div>
    </section>

    <!-- how we do it ends here -->

    <!-- questins starts here -->

    <!-- questins ends here -->

    <!-- services starts here -->

    <section class="overflow-hidden" id="service">
      <div class="container px-20 py-24 mx-auto md:px-32">
        <div class="mb-10 text-center">
          <h1 class="mb-4 text-5xl font-futuraB text-textC">Our Services</h1>
          <div class="flex justify-center mt-6">
            <div class="inline-flex w-16 h-1 rounded-full bg-accentC"></div>
          </div>
        </div>
        <div class="flex flex-wrap justify-center -m-4 service_container">
          <div class="p-5 md:w-1/3 service_container-slide-y1">
            <div class="relative h-full px-4 py-12 text-center">
              <h2 class="mb-8 text-4xl text-center font-futuraB text-textC md:text-left">
                Brand Strategy
              </h2>
              <ul class="flex flex-col items-start -mb-12 space-y-3 text-left text-textAltC font-futuraL">
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Brand purpose
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Target audience
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Brand attributes
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Brand book
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Brand mission statement
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Brand voice
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Brand personality
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Brand kit
                </li>
              </ul>
            </div>
          </div>

          <div class="p-4 md:w-1/3 service_container-slide-y2">
            <div class="relative h-full px-4 py-12 text-center">
              <h2 class="mb-8 text-4xl text-center font-futuraB text-textC md:text-left">
                Brand Identity
              </h2>
              <ul class="flex flex-col items-start -mb-12 space-y-3 text-left text-textAltC font-futuraL">
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Naming and Logo Design
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Web Design and Development
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Corporate Identity Design
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Product and Package Designing
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Marketing and Brand Collateral statement
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Brand Story Video
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Office Space Branding
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Brand Icons&#44; Graphics&#44; Animations&#44; Sound
                </li>
              </ul>
            </div>
          </div>

          <div class="p-4 md:w-1/3 service_container-slide-y3">
            <div class="relative h-full px-4 py-12 text-center">
              <h2 class="mb-8 text-4xl text-center font-futuraB text-textC md:text-left">
                Brand Marketing
              </h2>
              <ul class="flex flex-col items-start -mb-12 space-y-3 text-left text-textAltC font-futuraL">
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />SEO (Search Engine Optimisation)
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />PPC (Pay per click)
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Social Media Optimisation (SMO)
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Social Media Marketing (SMM)
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Email Marketing statement
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Influencer and Celebrity Marketing
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Video Marketing
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="tick" />Content Marketing
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- services ends here -->

    <!-- clients starts here -->

    <section>
      <div class="container px-10 py-10 mx-auto md:px-32">
        <div class="mb-20 text-center">
          <h1 class="mb-4 text-5xl font-futuraB title-font text-textC">
            Our Clients
          </h1>
          <div class="flex justify-center mt-6">
            <div class="inline-flex w-16 h-1 rounded-full bg-accentC"></div>
          </div>
        </div>
        <div class="flex flex-wrap justify-center -m-1">
          <div class="p-4 mb-6 lg:w-1/4 lg:mb-0">
            <div class="h-full text-center">
              <img alt="testimonial" class="inline-block object-cover object-center w-20 h-20 mb-8 bg-gray-100 border-2 border-gray-200 rounded-full" src="https://dummyimage.com/302x302" />
            </div>
          </div>
          <div class="p-4 mb-6 lg:w-1/4 lg:mb-0">
            <div class="h-full text-center">
              <img alt="testimonial" class="inline-block object-cover object-center w-20 h-20 mb-8 bg-gray-100 border-2 border-gray-200 rounded-full" src="https://dummyimage.com/300x300" />
            </div>
          </div>
          <div class="p-4 lg:w-1/4 lg:mb-0">
            <div class="h-full text-center">
              <img alt="testimonial" class="inline-block object-cover object-center w-20 h-20 mb-8 bg-gray-100 border-2 border-gray-200 rounded-full" src="https://dummyimage.com/305x305" />
            </div>
          </div>
          <div class="p-4 lg:w-1/4 lg:mb-0">
            <div class="h-full text-center">
              <img alt="testimonial" class="inline-block object-cover object-center w-20 h-20 mb-8 bg-gray-100 border-2 border-gray-200 rounded-full" src="https://dummyimage.com/305x305" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- clients ends here -->

    <!-- testimonial starts here -->

    <!-- <section>
      <div class="container px-10 py-10 mx-auto md:px-32">
        <div class="mb-20 text-center">
          <h1 class="mb-4 text-5xl font-futuraB title-font text-textC">
            Testimonials
          </h1>
          <div class="flex justify-center mt-6">
            <div class="inline-flex w-16 h-1 rounded-full bg-accentC"></div>
          </div>
        </div>
        <div class="container mx-auto mt-20 swiper mySwiper">
          <div class="mb-16 swiper-wrapper">
            <div class="swiper-slide">
              <div class="p-4 text-gray-800 rounded-lg shadow-md bg-primary">
                <div class="mb-2">
                  <p class="mb-2 text-center text-gray-600 ">
                    " Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique sapiente iusto esse. "
                  </p>
                  <div class="flex flex-col items-center justify-center">
                    <div class="w-12 h-12 overflow-hidden bg-gray-100 border-2 border-indigo-100 rounded-full">
                      <img src="https://cdn.pixabay.com/photo/2017/05/19/12/38/entrepreneur-2326419__340.jpg" alt="img" class="object-cover object-center w-full h-full" />
                    </div>
                    <h5 class="font-bold text-indigo-600">John Doe</h5>
                    <p class="text-sm text-gray-600">CEO / Founder</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-4 text-gray-800 rounded-lg shadow-md bg-primary">
                <div class="mb-2">
                  <p class="mb-2 text-center text-gray-600 ">
                    " Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique sapiente iusto esse. "
                  </p>
                  <div class="flex flex-col items-center justify-center">
                    <div class="w-12 h-12 overflow-hidden bg-gray-100 border-2 border-indigo-100 rounded-full">
                      <img src="https://cdn.pixabay.com/photo/2017/05/19/12/38/entrepreneur-2326419__340.jpg" alt="img" class="object-cover object-center w-full h-full" />
                    </div>
                    <h5 class="font-bold text-indigo-600">John Doe</h5>
                    <p class="text-sm text-gray-600">CEO / Founder</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-4 text-gray-800 rounded-lg shadow-md bg-primary">
                <div class="mb-2">
                  <p class="mb-2 text-center text-gray-600 ">
                    " Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique sapiente iusto esse. "
                  </p>
                  <div class="flex flex-col items-center justify-center">
                    <div class="w-12 h-12 overflow-hidden bg-gray-100 border-2 border-indigo-100 rounded-full">
                      <img src="https://cdn.pixabay.com/photo/2017/05/19/12/38/entrepreneur-2326419__340.jpg" alt="img" class="object-cover object-center w-full h-full" />
                    </div>
                    <h5 class="font-bold text-indigo-600">John Doe</h5>
                    <p class="text-sm text-gray-600">CEO / Founder</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-4 text-gray-800 rounded-lg shadow-md bg-primary">
                <div class="mb-2">
                  <p class="mb-2 text-center text-gray-600 ">
                    " Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique sapiente iusto esse. "
                  </p>
                  <div class="flex flex-col items-center justify-center">
                    <div class="w-12 h-12 overflow-hidden bg-gray-100 border-2 border-indigo-100 rounded-full">
                      <img src="https://cdn.pixabay.com/photo/2017/05/19/12/38/entrepreneur-2326419__340.jpg" alt="img" class="object-cover object-center w-full h-full" />
                    </div>
                    <h5 class="font-bold text-indigo-600">John Doe</h5>
                    <p class="text-sm text-gray-600">CEO / Founder</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <section>
      <div class="container px-10 py-10 mx-auto md:px-32">
        <div class="mb-20 text-center">
          <h1 class="mb-4 text-5xl font-futuraB title-font text-textC">
            Testimonials
          </h1>
          <div class="flex justify-center mt-6">
            <div class="inline-flex w-16 h-1 rounded-full bg-accentC"></div>
          </div>
        </div>

        <div class="relative flex items-center justify-center w-full overflow-hidden">
          <div class="w-full mySwiper pt-14 pb-14">
            <div class="swipe-wrapper">
              <div class="h-full bg-center bg-cover swipe-slide w-96">
                <div class="h-full p-8 rounded bg-secondaryC">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 mb-4 text-textC" viewBox="0 0 975.036 975.036">
                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                  </svg>
                  <p class="mb-6 leading-relaxed text-textC">
                    Synth chartreuse iPhone lomo cray raw denim brunch
                    everyday carry neutra before they sold out fixie 90's
                    microdosing. Tacos pinterest fanny pack venmo, post-ironic
                    heirloom try-hard pabst authentic iceland.
                  </p>
                  <a class="inline-flex items-center">
                    <img alt="testimonial" src="https://dummyimage.com/107x107" class="flex-shrink-0 object-cover object-center w-12 h-12 rounded-full" />
                    <span class="flex flex-col flex-grow pl-4">
                      <span class="font-medium title-font text-textC">Alper Kamu</span>
                      <span class="text-sm text-textAltC">DESIGNER</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- testimonial ends here -->
  </main>
  <?php include("./includes/footer.php") ?>
  <?php include("./includes/script.php") ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js" defer></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.4/swiper-bundle.min.js"></script>
  <script src="./dist/js/index.js" defer></script>
  <script src="./dist/js/animation.js"></script>
  <script type="text/javascript" src="./dist/js/vanilla-tilt.min.js" defer></script>
  <script type="text/javascript">
    VanillaTilt.init(document.querySelectorAll(".tilt"), {
      max: 25,
      speed: 1000,
      glare: true,
      "max-glare": 0.7,
    });
  </script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      autoplay: {
        delay: 1000,
      },
      loop: true,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    });
  </script>
</body>

</html>