console.log("JS Loaded");

// ===================================
// HAMBURGER MENU
// ===================================

const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("nav-links");

if (hamburger && navLinks) {
    hamburger.addEventListener("click", () => {
        navLinks.classList.toggle("active");
    });
}

// ===================================
// ACTIVE NAVIGATION LINK
// ===================================

const navItems = document.querySelectorAll(".nav-links a");

navItems.forEach((item) => {
    item.addEventListener("click", () => {

        navItems.forEach((link) => {
            link.classList.remove("active");
        });

        item.classList.add("active");

        if (navLinks) {
            navLinks.classList.remove("active");
        }
    });
});

const reveals = document.querySelectorAll(
    ".reveal, .reveal-left, .reveal-right"
);

window.addEventListener("scroll", () => {

    reveals.forEach((element) => {

        const windowHeight = window.innerHeight;
        const revealTop = element.getBoundingClientRect().top;

        if (revealTop < windowHeight - 100) {
            element.classList.add("show");
        }

    });

});


/* ===================================
   INDUPR PRELOADER
=================================== */

window.addEventListener("load", () => {

    const preloader = document.getElementById("preloader");
    const loadingText = document.getElementById("loading-text");

    const messages = [
        "Preparing Your Print Job...",
        "Applying CMYK Colors...",
        "Calibrating Print Quality...",
        "Finalizing Design Layout...",
        "Ready To Print..."
    ];

    let index = 0;

    const textInterval = setInterval(() => {

        index++;

        if (index < messages.length) {
            loadingText.textContent = messages[index];
        }

    }, 500);

    setTimeout(() => {

        clearInterval(textInterval);

        preloader.classList.add("hide");

        setTimeout(() => {
            preloader.remove();
        }, 700);

    }, 2500);

});