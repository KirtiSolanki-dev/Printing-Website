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