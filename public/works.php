<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $title = "Our Works";
  include('includes/head.php');
  ?>

  <script>
    0;
  </script>
</head>

<body class="bg-primaryC">

  <?php include("./includes/navbar.php") ?>

  <main>
    <!-- map starts here -->
    <section class="pb-10">
      <div class="container flex flex-col items-center justify-center mx-auto md:flex-row">
        <div class="w-auto h-full">
          <img class="object-cover object-center w-full" src="./dist/imgs/serviceB.jpg" alt="Office" />
        </div>
      </div>
    </section>
    <!-- map ends here -->

    <!-- works starts here -->

    <section>
      <div class="container items-center justify-center px-10 py-10 mx-auto md:px-32">
        <div class="mb-8 text-center">
          <h1 class="mb-4 text-5xl text-textC font-futuraB title-font">
            Our Works
          </h1>
          <div class="flex justify-center mt-6">
            <div class="inline-flex w-16 h-1 rounded-full bg-accentC"></div>
          </div>
        </div>

        <div class="container flex flex-wrap justify-center px-6 pt-8 pb-16">
          <nav class="items-center justify-center pb-8 mb-8 md:w-2/3">
            <div class="flex flex-col items-center text-base text-center md:flex-row justify-evenly text-textC md:ml-auto md:mr-auto">
              <span class="w-3/4 px-6 py-2 mx-8 my-2 text-2xl tracking-wider transition-all duration-300 ease-in-out border-2 cursor-pointer md:w-5/12 whitespace-nowrap dataSortList font-futuraB rounded-3xl border-accentC hover:text-primaryC hover:bg-accentC active" data-filter="all">All Projects</span>
              <span class="w-3/4 px-6 py-2 mx-8 my-2 text-2xl tracking-wider transition-all duration-300 ease-in-out border-2 cursor-pointer md:w-5/12 whitespace-nowrap dataSortList font-futuraB rounded-3xl border-accentC hover:text-primaryC hover:bg-accentC" data-filter="caseStudy">Case Study</span>
              <span class="w-3/4 px-6 py-2 mx-8 my-2 text-2xl tracking-wider transition-all duration-300 ease-in-out border-2 cursor-pointer md:w-5/12 whitespace-nowrap dataSortList font-futuraB rounded-3xl border-accentC hover:text-primaryC hover:bg-accentC" data-filter="featured">Featured</span>
            </div>
          </nav>

          <div class="flex flex-wrap -m-10 dataLists">
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 featured design">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/marketing.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    Shooting Stars
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 design">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/marketing2.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    The Catalyzer
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 caseStudy">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/design.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    The 400 Blows
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 featured">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/caseS.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    Neptune
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 develop">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/developer.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    Holden Caulfield
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 develop">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/design.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    Alper Kamu
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 featured">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/marketing.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    Shooting Stars
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 develop">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/marketing2.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    The Catalyzer
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 caseStudy marketing">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/design.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    The 400 Blows
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 develop">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/caseS.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    Neptune
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 design">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/developer.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    Holden Caulfield
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 caseStudy">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/design.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    Alper Kamu
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 featured">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/marketing.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    Shooting Stars
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 develop">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/marketing2.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    The Catalyzer
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 develop">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/design.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    The 400 Blows
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 featured marketing">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/caseS.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    Neptune
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 develop">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/developer.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    Holden Caulfield
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
            <div class="px-2 py-4 dataBox lg:w-1/3 sm:w-1/2 design develop">
              <div class="relative flex">
                <img alt="gallery" class="absolute inset-0 object-cover object-center w-full h-full" src="./dist/imgs/design.jpg" />
                <div class="relative z-10 w-full px-8 py-10 bg-white border-4 border-gray-200 opacity-0 hover:opacity-100">
                  <h2 class="mb-1 text-sm font-medium tracking-widest text-indigo-500 title-font">
                    THE SUBTITLE
                  </h2>
                  <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">
                    Alper Kamu
                  </h1>
                  <p class="leading-relaxed">
                    Photo booth fam kinfolk cold-pressed sriracha leggings
                    jianbing microdosing tousled waistcoat.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- workss ends here -->

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
            <div class="relative h-full px-8 py-12 text-center whitespace-nowrap">
              <h2 class="mb-8 text-4xl text-center font-futuraB text-textC md:text-left">
                Brand Strategy
              </h2>
              <ul class="flex flex-col items-start text-left text-textAltC -mb-4 space-y-2.5 font-futuraL">
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Brand purpose
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Target audience
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Brand attributes
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Brand book
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Brand mission statement
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Brand voice
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Brand personality
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Brand kit
                </li>
              </ul>
            </div>
          </div>

          <div class="p-5 md:w-1/3 service_container-slide-y2">
            <div class="relative h-full px-8 py-12 text-center whitespace-nowrap">
              <h2 class="mb-8 text-4xl text-center font-futuraB text-textC md:text-left">
                Brand Identity Designing
              </h2>
              <ul class="flex flex-col items-start text-center text-textAltC -mb-1 space-y-2.5 font-futuraL">
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Naming and Logo Design
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Web Design and Development
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Corporate Identity Design
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Product and Package Designing
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Marketing and Brand Collateral statement
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Brand Story Video
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Office Space Branding
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Brand Icons&#44; Graphics&#44; Animations&#44; Sound
                </li>
              </ul>
            </div>
          </div>

          <div class="p-5 md:w-1/3 service_container-slide-y3">
            <div class="relative h-full px-8 py-12 text-center whitespace-nowrap">
              <h2 class="mb-8 text-4xl font-futuraB text-textC md:text-left">
                Marketing and Development
              </h2>
              <ul class="flex flex-col items-start text-center text-textAltC -mb-1 space-y-2.5 font-futuraL">
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />SEO (Search Engine Optimisation)
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />PPC (Pay per click)
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Social Media Optimisation (SMO)
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Social Media Marketing (SMM)
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Email Marketing statement
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Influencer and Celebrity Marketing
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Video Marketing
                </li>
                <li class="inline-flex items-center justify-center">
                  <img src="./dist/imgs/icon/tick.svg" class="w-6 h-6 mr-2" alt="" />Content Marketing
                </li>
              </ul>
            </div>
          </div>

          <!-- <div class="p-4 md:w-1/3 service_container-slide--x">
                <div
                    class="relative h-full px-8 py-12 overflow-hidden text-center rounded-lg whitespace-nowrap">
                    <h2 class="mb-8 text-4xl tracking-wide text-center font-futuraB text-textC md:text-left">
                        Printing Services</h2>
                    <ul
                        class="flex flex-col items-start text-left -mb-1 text-textAltC space-y-2.5 font-futuraL">
                        <li>
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-indigo-500 bg-indigo-100 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" class="w-3 h-3"
                                    viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Business Cards
                        </li>
                        <li>
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-indigo-500 bg-indigo-100 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" class="w-3 h-3"
                                    viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>LetterHeads
                        </li>
                        <li>
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-indigo-500 bg-indigo-100 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" class="w-3 h-3"
                                    viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Calender
                        </li>
                        <li>
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-indigo-500 bg-indigo-100 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" class="w-3 h-3"
                                    viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Envelopes
                        </li>
                        <li>
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-indigo-500 bg-indigo-100 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" class="w-3 h-3"
                                    viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Carry Bags
                        </li>
                        <li>
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-indigo-500 bg-indigo-100 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" class="w-3 h-3"
                                    viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Packing Boxes
                        </li>
                        <li>
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-indigo-500 bg-indigo-100 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" class="w-3 h-3"
                                    viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Banners
                        </li>
                        <li>
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-indigo-500 bg-indigo-100 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" class="w-3 h-3"
                                    viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>T-Shirts
                        </li>
                        <li>
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-indigo-500 bg-indigo-100 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="3" class="w-3 h-3"
                                    viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Store Boards
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
      </div>
    </section>

    <!-- services ends here -->

    <!-- clients starts here -->

    <section class="text-gray-600 body-font">
      <div class="container px-10 py-10 mx-auto md:px-32">
        <div class="mb-20 text-center">
          <h1 class="mb-4 text-5xl text-gray-900 font-futuraB title-font">
            Our Clients
          </h1>
          <div class="flex justify-center mt-6">
            <div class="inline-flex w-16 h-1 rounded-full bg-secondary"></div>
          </div>
        </div>
        <section class="text-gray-600 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4 text-center">
              <div class="w-1/2 p-4 sm:w-1/4">
                <h2 class="text-3xl font-medium text-gray-900 title-font sm:text-4xl">
                  2.7K
                </h2>
                <p class="leading-relaxed">Users</p>
              </div>
              <div class="w-1/2 p-4 sm:w-1/4">
                <h2 class="text-3xl font-medium text-gray-900 title-font sm:text-4xl">
                  1.8K
                </h2>
                <p class="leading-relaxed">Subscribes</p>
              </div>
              <div class="w-1/2 p-4 sm:w-1/4">
                <h2 class="text-3xl font-medium text-gray-900 title-font sm:text-4xl">
                  35
                </h2>
                <p class="leading-relaxed">Downloads</p>
              </div>
              <div class="w-1/2 p-4 sm:w-1/4">
                <h2 class="text-3xl font-medium text-gray-900 title-font sm:text-4xl">
                  4
                </h2>
                <p class="leading-relaxed">Products</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>

    <!-- clients ends here -->

    <!-- testimonial starts here -->

    <section class="text-gray-600 body-font">
      <div class="container px-32 py-24 mx-auto">
        <div class="mb-20 text-center">
          <h1 class="mb-4 text-5xl text-gray-900 font-futuraB title-font">
            Testimonials
          </h1>
          <div class="flex justify-center mt-6">
            <div class="inline-flex w-16 h-1 rounded-full bg-secondary"></div>
          </div>
        </div>
        <div class="flex flex-wrap -m-4">
          <div class="w-full p-4 md:w-1/2">
            <div class="h-full p-8 bg-gray-100 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 mb-4 text-gray-400" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
              </svg>
              <p class="mb-6 leading-relaxed">
                Synth chartreuse iPhone lomo cray raw denim brunch everyday
                carry neutra before they sold out fixie 90's microdosing.
                Tacos pinterest fanny pack venmo, post-ironic heirloom
                try-hard pabst authentic iceland.
              </p>
              <a class="inline-flex items-center">
                <img alt="testimonial" src="https://dummyimage.com/106x106" class="flex-shrink-0 object-cover object-center w-12 h-12 rounded-full" />
                <span class="flex flex-col flex-grow pl-4">
                  <span class="font-medium text-gray-900 title-font">Holden Caulfield</span>
                  <span class="text-sm text-gray-500">UI DEVELOPER</span>
                </span>
              </a>
            </div>
          </div>
          <div class="w-full p-4 md:w-1/2">
            <div class="h-full p-8 bg-gray-100 rounded">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 mb-4 text-gray-400" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
              </svg>
              <p class="mb-6 leading-relaxed">
                Synth chartreuse iPhone lomo cray raw denim brunch everyday
                carry neutra before they sold out fixie 90's microdosing.
                Tacos pinterest fanny pack venmo, post-ironic heirloom
                try-hard pabst authentic iceland.
              </p>
              <a class="inline-flex items-center">
                <img alt="testimonial" src="https://dummyimage.com/107x107" class="flex-shrink-0 object-cover object-center w-12 h-12 rounded-full" />
                <span class="flex flex-col flex-grow pl-4">
                  <span class="font-medium text-gray-900 title-font">Alper Kamu</span>
                  <span class="text-sm text-gray-500">DESIGNER</span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- testimonial ends here -->
  </main>
  <?php include("./includes/footer.php") ?>


  <?php include("./includes/script.php") ?>
</body>

</html>