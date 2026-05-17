document.addEventListener("DOMContentLoaded", function () {
    const passwordToggle = document.querySelector(".password-toggle");

    if (passwordToggle) {
        passwordToggle.addEventListener("click", function () {
            const targetId = this.dataset.target;
            const input = document.getElementById(targetId);
            const icon = this.querySelector("i");

            if (!input) return;

            const isPassword = input.type === "password";

            input.type = isPassword ? "text" : "password";

            icon.classList.toggle("bi-eye");
            icon.classList.toggle("bi-eye-slash");

            this.setAttribute(
                "aria-label",
                isPassword ? "Hide password" : "Show password",
            );
        });
    }

    const form = document.querySelector("form");
    const submitButton = document.querySelector(".auth-submit-btn");

    if (form && submitButton) {
        form.addEventListener("submit", function () {
            submitButton.disabled = true;
            submitButton.querySelector(".submit-text").classList.add("d-none");
            submitButton
                .querySelector(".submit-loading")
                .classList.remove("d-none");
        });
    }
});
