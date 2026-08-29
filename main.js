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
