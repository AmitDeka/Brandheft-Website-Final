<!-- navbar starts here -->
<nav class="sticky top-0 left-0 z-50 flex flex-wrap items-center justify-between p-2 transition-shadow ease-in shadow-sm md:px-10 bg-primaryC" id="navBar">
    <a href="/" class="flex items-center text-textC">
        <img class="w-10 h-10 md:w-12 md:h-12" src="./dist/imgs/logo-circle.png" alt="Logo" />
        <span class="ml-2 text-2xl md:text-3xl font-futuraB text-textC">Brand<span class="text-accentC">Heft.</span></span>
    </a>
    <div class="flex md:hidden">
        <button id="hamburger">
            <img class="block toggle" src="./dist/imgs/icon/bars.svg" width="30" height="30" />
            <img class="hidden toggle" src="./dist/imgs/icon/times.svg" width="30" height="30" />
        </button>
    </div>
    <div class="hidden w-full mt-2 text-center toggle md:w-auto md:flex font-futuraL md:mt-0">
        <a href="/services.php" class="block px-3 py-3 text-xl md:inline-block text-textC hover:text-accentC">Services</a>
        <!-- <a href="/works.php" class="block px-3 py-3 text-xl md:inline-block text-textC hover:text-accentC">Works</a> -->
        <a href="/about.php" class="block px-3 py-3 text-xl md:inline-block text-textC hover:text-accentC">About</a>
        <a href="/digitalne.php" class="block px-3 py-3 text-xl md:inline-block text-textC hover:text-accentC">Digital NE</a>
        <!-- <a href="#" class="block px-3 py-3 text-xl md:inline-block text-textC hover:text-accentC">Creative Club</a> -->
        <!-- <a href="#" class="block px-3 py-3 text-xl md:inline-block text-textC hover:text-accentC">Blog</a> -->
    </div>
    <div class="hidden w-full py-3 text-center toggle sm:w-auto md:flex font-futuraL md:py-0">
        <a href="/contact.php" class="hidden px-4 py-2 mt-4 text-base transition-colors duration-300 border-2 rounded-full toggle sm:flex font-futuraM text-textC bg-primaryC border-accentC focus:outline-none hover:bg-accentC hover:text-white md:mt-0">Contact Us
        </a>
    </div>
</nav>
<!-- navbar ends here -->