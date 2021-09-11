

// Nav toggle 
document.getElementById("hamburger").onclick = function toggleMenu() {
    const navToggle = document.getElementsByClassName("toggle");
    for (let i = 0; i < navToggle.length; i++) {
        navToggle.item(i).classList.toggle("hidden");
    }
};

// on scroll 
function scrollHeader() {
    const nav = document.getElementById('navBar')
    if (this.scrollY >= 50) {
        nav.classList.add('shadow-xl')
        nav.classList.remove('shadow-sm')
    } else {
        nav.classList.remove('shadow-xl')
        nav.classList.add('shadow-sm')
    }
}
window.addEventListener('scroll', scrollHeader)

// Testimonial

$(document).ready(function () {
    $('.dataSortList').click(function () {
        const value = $(this).attr('data-filter');
        if (value == 'all') {
            $('.dataBox').show('1000');
        }
        else {
            $('.dataBox').not('.' + value).hide('1000');
            $('.dataBox').filter('.' + value).show('1000');
        }
    })
})

// Tilt
VanillaTilt.init(document.querySelectorAll(".tilt_card"), {
    max: 25,
    speed: 1000,
    glare: true,
    "max-glare": .7,
    gyroscope: true,
    gyroscopeMinAngleX: -45,
    gyroscopeMaxAngleX: 45,
    gyroscopeMinAngleY: -45,
    gyroscopeMaxAngleY: 45,
});


// contact form submit

var form = document.getElementById("contact");

async function handleSubmit(event) {
    event.preventDefault();
    var status = document.getElementById("status");
    var data = new FormData(event.target);
    fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
    }).then(response => {
        status.classList.add("success");
        status.innerHTML = "Thank you for getting in touch!";
        form.reset();
    }).catch(error => {
        status.classList.add("error");
        status.innerHTML = "Oops! We have encountered a problem."
    });
}
form.addEventListener("submit", handleSubmit)