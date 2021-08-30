

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
        nav.classList.add('shadow-md')
        nav.classList.remove('shadow-sm')
    } else {
        nav.classList.remove('shadow-md')
        nav.classList.add('shadow-sm')
    }
}
window.addEventListener('scroll', scrollHeader)