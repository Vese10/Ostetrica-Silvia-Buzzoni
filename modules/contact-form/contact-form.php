<style>
    .hidden {
        display: none;
    }

    .error {
        color: red;
    }
</style>
<div id="form-container">
    <form class="form" action="send_mail.php" id="contact-form">
        <div class="form-group m-3 px-4 px-lg-0 px-4 px-lg-0">
            <input type="text" class="form-control" name="nome_cognome" placeholder="Nome e Cognome" required>
        </div>
        <div class="form-group m-3 px-4 px-lg-0 px-4 px-lg-0">
            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
        </div>
        <div class="form-group m-3 px-4 px-lg-0 px-4 px-lg-0">
            <input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
        </div>
        <div class="form-group m-3 px-4 px-lg-0 px-4 px-lg-0">
            <textarea class="form-control" name="messaggio" rows="3" placeholder="Messaggio"></textarea>
        </div>
        <div class="form-check mx-5 mx-lg-5 m-3 px-4 px-lg-0 px-4 px-lg-0">
            <input type="checkbox" class="form-check-input" name="privacy" id="privacy" required>
            <label class="form-check-label" for="privacy">Acconsento al trattamento dei dati a norma del Regolamento UE 2016/679.<a class="privacy-link" href="privacy-policy.php">Informativa completa.</a> *</label>
        </div>
        <div id="recaptcha-container" class="hidden">
            <div class="g-recaptcha" data-sitekey="6LcguVsrAAAAAKgwK29fwiX7SwcW-oD886h05kGD"></div>
        </div>
        <div class="form-group m-3 px-4 px-lg-0 px-4 px-lg-0">
            <button type="submit" class="btn btn-block btn-info-contact btn-accordion">Invia richiesta</button>
        </div>
        <div id="error-message" class="error hidden">Tutti i campi sono obbligatori e la privacy deve essere accettata.</div>
    </form>
</div>
<div id="confirmation-message" class="hidden">
    <p class="text-dove">Grazie per avermi contattato. Ti risponderò al più presto.</p>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>