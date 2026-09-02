
const form = document.getElementById("contactForm");

form.addEventListener("submit", (e) => {

    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const message = document.getElementById("message").value.trim();

    if (!name || !email || !phone || !message) {
        alert("Please fill all required fields.");
        return;
    }

    alert("Message sent successfully!");

    form.reset();
});