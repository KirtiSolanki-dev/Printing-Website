// ===================================
// HAMBURGER MENU
// ===================================

const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("nav-links");

hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});


// ===================================
// ACTIVE NAVIGATION LINK
// ===================================

const navItems = document.querySelectorAll(".nav-links a");

navItems.forEach((item) => {

    item.addEventListener("click", () => {

        // Remove active class from all links
        navItems.forEach((link) => {
            link.classList.remove("active");
        });

        // Add active class to clicked link
        item.classList.add("active");

        // Close mobile menu after clicking a link
        navLinks.classList.remove("active");
    });

});