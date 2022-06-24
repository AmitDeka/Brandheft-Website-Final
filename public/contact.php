<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Contact Us";
    include('includes/head.php');
    ?>

    <script>
        0
    </script>
</head>

<body class="bg-primaryC">
    <?php include("./includes/navbar.php") ?>
    <main>
        <!-- contact form starts here -->

        <section class="relative">
            <div class="container flex flex-wrap px-10 pt-12 pb-20 mx-auto sm:px-24 sm:py-2 sm:flex-nowrap">
                <div class="relative flex items-end justify-start px-8 pt-48 pb-8 overflow-hidden rounded-lg md:w-1/2 bg-primaryC sm:mr-10 sm:p-10 sm:px-20 sm:pb-10 map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.697226886735!2d91.81428991495345!3d26.141413283465784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a59cba131bca3%3A0x6b47c4822f564946!2sBrandHeft!5e0!3m2!1sen!2sin!4v1630332812655!5m2!1sen!2sin" width="100%" height="100%" style="border:0; filter: grayscale(.1) contrast(1.2) opacity(.7);" class="absolute inset-0" frameborder="0" marginheight="" marginwidth="0" title="map" loading="lazy"></iframe>
                    <div class="relative flex flex-wrap py-8 rounded shadow-xl bg-primaryC">
                        <div class="px-6 md:w-1/2">
                            <h2 class="text-base tracking-widest font-futuraB text-textC">ADDRESS</h2>
                            <p class="mt-1 font-futuraL text-accentC">Jana path, House No. 17, Bylane 17, Fakharuddin
                                Ali Ahmed Road,
                                Aziz Nagar
                            </p>
                        </div>
                        <div class="px-6 mt-4 md:w-1/2 md:mt-0">
                            <h2 class="text-base tracking-widest font-futuraB text-textC">EMAIL</h2>
                            <a class="leading-relaxed text-accentC font-futuraL" href="mailto:info@brandheft.com">info@brandheft.com</a>
                            <h2 class="mt-4 text-base tracking-widest font-futuraB text-textC">PHONE</h2>
                            <p class="leading-relaxed text-accentC font-futuraL">123-456-7890</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full my-8 md:w-1/2 md:py-12 md:mt-0 form-container">
                    <h2 class="mb-1 text-lg font-medium text-textC title-font">Contact Information</h2>
                    <p class="mb-5 leading-relaxed text-textAltC">Fill up the form and our Team will get back to you
                        within 24 hours.</p>
                    <form action="https://api.web3forms.com/submit" method="POST" id="contactForm">
                        <input type="hidden" name="apikey" value="c32e7166-7643-4bd3-877f-7eac6b81c28e">
                        <div class="relative mb-4">
                            <label for="name" class="text-sm leading-7 tracking-widest text-textC font-futuraB">Name</label>
                            <input type="text" id="name" name="name" required class="w-full px-3 py-1 text-base leading-8 transition-colors duration-300 ease-in-out border-2 rounded outline-none font-futuraL bg-secondaryC border-secondaryC focus:border-accentC text-textC">
                        </div>
                        <div class="relative mb-4">
                            <label for="email" class="text-sm leading-7 tracking-widest text-textC font-futuraB">Email</label>
                            <input type="email" id="email" name="email" required class="w-full px-3 py-1 text-base leading-8 transition-colors duration-300 ease-in border-2 rounded outline-none font-futuraL bg-secondaryC border-secondaryC focus:border-accentC text-textC">
                        </div>
                        <div class="relative mb-4">
                            <label for="subject" class="text-sm leading-7 tracking-widest text-textC font-futuraB">Subject</label>
                            <input type="text" id="subject" name="subject" required class="w-full px-3 py-1 text-base leading-8 transition-colors duration-300 ease-in border-2 rounded outline-none font-futuraL bg-secondaryC border-secondaryC focus:border-accentC text-textC">
                        </div>
                        <div class="relative mb-4">
                            <label for="message" class="text-sm leading-7 tracking-widest text-textC font-futuraB">Message</label>
                            <textarea id="message" name="message" required class="w-full h-16 px-3 py-1 text-base leading-6 transition-colors duration-300 ease-in border-2 rounded outline-none resize-none sm:h-24 font-futuraL bg-secondaryC border-secondaryC focus:border-accentC text-textC"></textarea>
                        </div>
                        <button type="submit" class="inline-flex items-center justify-center px-6 py-2 text-lg tracking-widest transition-colors duration-300 ease-in border-2 rounded bg-accentC text-primaryHighC font-futuraB border-secondary focus:outline-none hover:bg-primaryC hover:text-textC">Contact
                            Us
                            <i class="ml-1 text-2xl bx bx-right-arrow-alt"></i>
                        </button>

                        <div class="w-4/5 mx-auto my-4 text-base text-center" id="result">
                        </div>
                    </form>
                    <p class="mt-3 text-xs text-center text-textAltC">We respect your privacy and Protecting it
                        seriously.</p>
                </div>
            </div>
        </section>

        <!-- contact form end here -->

    </main>
    <?php include("./includes/footer.php") ?>
    <?php include("./includes/script.php") ?>
    <script type="text/javascript">
        const form = document.getElementById('contactForm');
        const result = document.getElementById('result');

        form.addEventListener('submit', function(e) {
            const formData = new FormData(form);
            e.preventDefault();
            var object = {};
            formData.forEach((value, key) => {
                object[key] = value
            });
            var json = JSON.stringify(object);
            result.classList.add('text-yellow-300')
            result.innerHTML = "Please wait..."

            fetch('https://api.web3forms.com/submit', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: json
                })
                .then(async (response) => {
                    let json = await response.json();
                    if (response.status == 200) {
                        result.classList.remove('text-yellow-300')
                        result.classList.add('text-green-300')
                        result.innerHTML = json.message;
                    } else {
                        console.log(response);
                        result.innerHTML = json.message;
                    }
                })
                .catch(error => {
                    console.log(error);
                    result.classList.remove('text-yellow-300')
                    result.classList.add('text-red-300')
                    result.innerHTML = "Something went wrong!";
                })
                .then(function() {
                    form.reset();
                    setTimeout(() => {
                        result.style.display = "none";
                    }, 3000);
                });
        });
    </script>
</body>

</html>