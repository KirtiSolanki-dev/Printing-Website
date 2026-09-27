console.log("CONTACT JS LOADED");

document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("contactForm");

    if (!form) {
        console.log("Form not found");
        return;
    }

    form.addEventListener("submit", async function (e) {

        e.preventDefault();

        // Client-side validation
        const phone = document.getElementById("phone").value.trim();
        const email = document.getElementById("email").value.trim();

        if (!/^[6-9]\d{9}$/.test(phone)) {
            alert("Please enter a valid 10-digit mobile number.");
            return;
        }

        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            alert("Please enter a valid email address.");
            return;
        }

        const formData = new FormData(form);

        try {

            const response = await fetch("contact.php", {
                method: "POST",
                body: formData
            });

            const result = await response.text();

            if (result.trim() === "success") {

                form.innerHTML = `
                    <div class="success-message">
                        <i class="fa-solid fa-circle-check"></i>
                        <h3>Message Sent Successfully</h3>
                        <p>Thank you! Your enquiry has been submitted successfully.</p>
                    </div>
                `;

            } else {

                console.log(result);
                alert("Something went wrong.");

            }

        } catch (error) {

            console.error(error);
            alert("Server Error");

        }

    });

});