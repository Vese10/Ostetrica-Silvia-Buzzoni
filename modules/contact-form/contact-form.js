document.addEventListener("DOMContentLoaded", function () {
  const privacyCheckbox = document.getElementById("privacy");
  const recaptchaContainer = document.getElementById("recaptcha-container");

  // Mostra il reCAPTCHA quando l'utente accetta i termini della privacy
  privacyCheckbox.addEventListener("change", function () {
    if (privacyCheckbox.checked) {
      recaptchaContainer.classList.remove("hidden");
    } else {
      recaptchaContainer.classList.add("hidden");
    }
  });

  document
    .getElementById("contact-form")
    .addEventListener("submit", function (event) {
      event.preventDefault();

      // Rimuovi messaggio di errore se presente
      var errorMessage = document.getElementById("error-message");
      errorMessage.classList.add("hidden");

      var form = this;
      var formData = new FormData(form);
      var valid = true;

      // Verifica se tutti i campi obbligatori sono compilati
      form.querySelectorAll("input, textarea").forEach(function (input) {
        if (!input.checkValidity()) {
          valid = false;
          input.classList.add("error");
        } else {
          input.classList.remove("error");
        }
      });

      // Verifica se il reCAPTCHA è stato completato
      var recaptchaResponse = grecaptcha.getResponse();
      if (recaptchaResponse === "") {
        valid = false;
        errorMessage.classList.remove("hidden");
        errorMessage.textContent = "Per favore, completa il reCAPTCHA.";
      }

      if (valid) {
        fetch("modules/contact-form/send_mail.php", {
          method: "POST",
          body: formData,
        })
          .then((response) => response.text())
          .then((data) => {
            document.getElementById("form-container").classList.add("hidden");
            document
              .getElementById("confirmation-message")
              .classList.remove("hidden");
          })
          .catch((error) => console.error("Error:", error));
      } else {
        // Mostra messaggio di errore
        errorMessage.classList.remove("hidden");
      }
    });
});
