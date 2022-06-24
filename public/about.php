<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "About Us";
    include('includes/head.php');
    ?>
</head>

<body class="bg-primaryC">
    <?php include("./includes/navbar.php") ?>
    <main>
        <!-- about us starts here -->
        <section>
            <div class="container px-6 py-12 mx-auto sm:px-20 about_container">
                <div class="mb-10 text-center">
                    <h1 class="mb-4 text-5xl font-futuraB text-textC">About Us</h1>
                    <div class="flex justify-center mt-6">
                        <div class="inline-flex w-16 h-1 rounded-full bg-accentC"></div>
                    </div>
                </div>
                <div class="container px-4 py-12 mx-auto sm:p-16 about_content">
                    <div class="flex flex-wrap -m-12">
                        <div class="flex flex-col items-start px-12 py-4 md:w-1/2">
                            <p class="mt-4 mb-4 text-base sm:text-xl sm:first-letter:text-3xl font-futuraM text-textC first-letter:text-accentC first-letter:text-xl">
                                We
                                are a tiny
                                group
                                of candid humans based in Guwahati – a riverine port city in India that lies amidst the
                                beauty of multiple hills and beside the mighty river Brahmaputra.</p>
                            <p class="text-base font-futuraM sm:text-xl text-textC">We empathetically collaborate
                                with
                                entrepreneurial
                                individuals to check off targets on their vision boards. We love conversations – about
                                their
                                goals, ideals and what fuels their passion.
                            </p>
                        </div>
                        <div class="flex flex-col items-start px-12 py-4 md:w-1/2">
                            <p class="mt-4 mb-4 text-base font-futuraM sm:text-xl sm:first-letter:text-3xl text-textC first-letter:text-accentC first-letter:text-xl">
                                Whether you
                                are a visionary, planning to build an
                                impactful business or a fearless
                                individual, molding your personal brand, we provide our support to motivate and excite
                                you
                                throughout your journey towards achieving that. The next thing you know, you are not
                                sitting
                                with team of consultants but a group of friends who are careful thinkers as well as
                                expert
                                designers & marketers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us ends here -->


        <!-- core value starts here -->
        <section>
            <div class="container px-5 py-16 mx-auto value_container">
                <div class="mb-10 text-center">
                    <h1 class="mb-4 text-5xl font-futuraB text-textC">Our Core Value</h1>
                    <div class="flex justify-center mt-6">
                        <div class="inline-flex w-16 h-1 rounded-full bg-accentC"></div>
                    </div>
                </div>
                <div class="px-4 py-12 mx-auto sm:px-16 sm:py-16">
                    <div class="flex flex-col items-center pb-10 mx-auto mb-10 border-b lg:w-3/4 border-accentC sm:flex-row value_content1">
                        <div class="inline-flex items-center justify-center h-40 flex-shrink-0w-40 sm:w-48 sm:h-48 sm:mr-10">
                            <img class="w-40 h-40 sm:w-48 sm:h-48" src="./dist/imgs/advice.png" alt="Advice Image from Undraw">
                        </div>
                        <div class="flex-grow mt-6 text-center sm:text-left sm:mt-0">
                            <h2 class="mb-4 text-4xl text-textC font-futuraB">Delivering genuine advices</h2>
                            <p class="text-lg leading-relaxed text-textAltC font-futuraL sm:text-xl">We vow ourselves
                                to
                                honesty and
                                believe that frank opinions
                                can save lives (and businesses).</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center pb-10 mx-auto mb-10 border-b lg:w-3/4 border-accentC sm:flex-row value_content2">
                        <div class="flex-grow mt-6 text-center sm:text-left sm:mt-0">
                            <h2 class="mb-4 text-4xl text-textC font-futuraB">Embracing uniqueness</h2>
                            <p class="text-lg leading-relaxed text-textAltC font-futuraL sm:text-xl">We admire unique
                                ideas and
                                quirky
                                individuals. In fact, we
                                love them! Nothing is eccentric to us.</p>
                        </div>
                        <div class="inline-flex items-center justify-center flex-shrink-0 order-first w-40 h-40 sm:w-48 sm:h-48 sm:order-none sm:ml-10">
                            <img class="w-40 h-40 sm:w-48 sm:h-48" src="./dist/imgs/unique.png" alt="Unique Image from Undraw" type="image/webp">
                        </div>
                    </div>
                    <div class="flex flex-col items-center mx-auto lg:w-3/4 sm:flex-row value_content3">
                        <div class="inline-flex items-center justify-center flex-shrink-0 w-40 h-40 sm:w-48 sm:h-48 sm:mr-10">
                            <img class="w-40 h-40 sm:w-48 sm:h-48" src="./dist/imgs/problem.png" alt="Problem Image from Undraw">
                        </div>
                        <div class="flex-grow mt-6 text-center sm:text-left sm:mt-0">
                            <h2 class="mb-4 text-4xl text-textC font-futuraB">Having fun with the problems</h2>
                            <p class="text-lg leading-relaxed text-textAltC font-futuraL sm:text-xl">Some retreats,
                                good
                                music,
                                fun
                                games and we are good to go
                                overcoming any roadblock.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- core value ends here  -->


        <!-- teams starts here -->
        <section>
            <div class="container w-11/12 px-5 py-16 mx-auto team_container">
                <div class="mb-10 text-center">
                    <h1 class="mb-4 text-5xl font-futuraB text-textC">Our Team</h1>
                    <div class="flex justify-center mt-6">
                        <div class="inline-flex w-16 h-1 rounded-full bg-accentC"></div>
                    </div>
                </div>
                <div class="flex flex-wrap items-center justify-center px-4 py-10 mx-auto gap-y-8 grid-cols-teamCard sm:px-16 sm:py-16 team_content">
                    <!-- 1 -->
                    <div class="cardT tilt neumorph">
                        <div class="flex flex-col items-center justify-center">
                            <div class="relative w-24 h-24 mb-3 sm:w-28 sm:h-28 sm:mb-5">
                                <img class="absolute top-0 left-0 object-cover w-full h-full rounded-full" src="./dist/imgs/abhijitkalita.jpg" alt="abhijit kalita">
                            </div>
                            <div class="mb-5">
                                <h4 class="mb-2 text-xl tracking-wide font-futuraB text-textC md:text-2xl md:mb-4">
                                    Abhijit Kalita</h4>
                                <span class="text-base font-futuraL text-textAltC md:text-lg">Co-Founder, Brand
                                    Strategist & Marketer</span>
                            </div>
                            <div class="absolute mt-4 bottom-3">
                                <a href=""><i class="bx bxl-facebook facebook"></i></a>
                                <a href=""><i class="bx bxl-twitter twitter"></i></a>
                                <a href=""><i class="bx bxl-linkedin linkedin"></i></a>
                                <a href=""><i class="bx bxl-instagram-alt instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="cardT tilt neumorph">
                        <div class="flex flex-col items-center justify-center">
                            <div class="relative w-24 h-24 mb-3 sm:w-28 sm:h-28 sm:mb-5">
                                <img class="absolute top-0 left-0 object-cover w-full h-full rounded-full" src="./dist/imgs/mridusmitachoudhary.jpeg" alt="mridusmita choudhary">
                            </div>
                            <div class="mb-5">
                                <h4 class="mb-2 text-xl tracking-wide font-futuraB text-textC md:text-2xl md:mb-4">
                                    Mridusmita
                                    Choudhury</h4>
                                <span class="text-base font-futuraL text-textAltC md:text-lg">Co-Founder, Head of
                                    Content & Communication</span>
                            </div>
                            <div class="absolute mt-4 bottom-3">
                                <a href=""><i class="bx bxl-facebook facebook"></i></a>
                                <a href=""><i class="bx bxl-twitter twitter"></i></a>
                                <a href=""><i class="bx bxl-linkedin linkedin"></i></a>
                                <a href=""><i class="bx bxl-instagram-alt instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="cardT tilt neumorph">
                        <div class="flex flex-col items-center justify-center">
                            <div class="relative w-24 h-24 mb-3 sm:w-28 sm:h-28 sm:mb-5">
                                <img class="absolute top-0 left-0 object-cover w-full h-full rounded-full" src="./dist/imgs/dipankarphukan.jpg" alt="dipankar phukan">
                            </div>
                            <div class="mb-5">
                                <h4 class="mb-2 text-xl tracking-wide font-futuraB text-textC md:text-2xl md:mb-4">
                                    Dipankar Phukon
                                </h4>
                                <span class="text-base font-futuraL text-textAltC md:text-lg">Co-Founder, Technical Head
                                    & Analyst</span>
                            </div>
                            <div class="absolute mt-4 bottom-3">
                                <a href=""><i class="bx bxl-facebook facebook"></i></a>
                                <a href=""><i class="bx bxl-twitter twitter"></i></a>
                                <a href=""><i class="bx bxl-linkedin linkedin"></i></a>
                                <a href=""><i class="bx bxl-instagram-alt instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="cardT tilt neumorph">
                        <div class="flex flex-col items-center justify-center">
                            <div class="relative w-24 h-24 mb-3 sm:w-28 sm:h-28 sm:mb-5">
                                <img class="absolute top-0 left-0 object-cover w-full h-full rounded-full" src="./dist/imgs/anshul.jpeg" alt="Ansul Khetan">
                            </div>
                            <div class="mb-5">
                                <h4 class="mb-5 text-xl tracking-wide font-futuraB text-textC md:text-2xl md:mb-4">Ansul
                                    Khetan</h4>
                                <span class="text-base font-futuraL text-textAltC md:text-lg">Head Business development
                                    & Networking</span>
                            </div>
                            <div class="absolute mt-4 bottom-3">
                                <a href=""><i class="bx bxl-facebook facebook"></i></a>
                                <a href=""><i class="bx bxl-twitter twitter"></i></a>
                                <a href=""><i class="bx bxl-linkedin linkedin"></i></a>
                                <a href=""><i class="bx bxl-instagram-alt instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="cardT tilt neumorph">
                        <div class="flex flex-col items-center justify-center">
                            <div class="relative w-24 h-24 mb-3 sm:w-28 sm:h-28 sm:mb-5">
                                <img class="absolute top-0 left-0 object-cover w-full h-full rounded-full" src="./dist/imgs/katha.jpeg" alt="Kathamrita Banik">
                            </div>
                            <div class="mb-5">
                                <h4 class="mb-5 text-xl tracking-wide font-futuraB text-textC md:text-2xl md:mb-4">
                                    Kathamrita Banik
                                </h4>
                                <span class="text-base font-futuraL text-textAltC md:text-lg">Digital marketer &
                                    Strategist</span>
                            </div>
                            <div class="absolute mt-4 bottom-3">
                                <a href=""><i class="bx bxl-facebook facebook"></i></a>
                                <a href=""><i class="bx bxl-twitter twitter"></i></a>
                                <a href=""><i class="bx bxl-linkedin linkedin"></i></a>
                                <a href=""><i class="bx bxl-instagram-alt instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- 6 -->

                </div>
            </div>
        </section>
        <!-- teams ends here -->


        <!-- testimonial starts here -->


        <!-- testimonial ends here -->

    </main>
    <?php include("./includes/footer.php") ?>
    <?php include("./includes/script.php") ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>

    <script type="text/javascript" src="./dist/js/vanilla-tilt.min.js"></script>
    <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll(" .tilt"), {
            max: 25,
            speed: 1000,
            glare: true,
            "max-glare": .7
        });
    </script>

</body>

</html>