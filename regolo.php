<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Regolo Ostetrico Digitale -  Ostetrica Silvia Buzzoni">
  <meta property="og:description" content="D.ssa Silvia Buzzoni Ostetrica Libera Professionista a Ferrara e provincia - Regolo Ostetrico Digitale">
  <meta property="og:image" content="https://ostetricasilviabuzzoni.it/assets/img/favicon.webp">
  <meta property="og:url" content="https://ostetricasilviabuzzoni.it/regolo">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="it_IT">
  <meta name="description" content="D.ssa Silvia Buzzoni Ostetrica Libera Professionista a Ferrara e provincia - Regolo Ostetrico Digitale">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.webp">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <title>Regolo Ostetrico Digitale - Ostetrica Silvia Buzzoni</title>
  <!-- Dati strutturati Schema.org in formato JSON-LD -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MedicalOrganization",
      "name": "Ostetrica Silvia Buzzoni",
      "url": "https://ostetricasilviabuzzoni.it",
      "logo": "https://ostetricasilviabuzzoni.it/assets/img/favicon.webp",
      "description": "Ostetrica libera professionista a Ferrara. Servizi di assistenza ostetrica durante gravidanza, parto e post-parto.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "via Gaetano Pesci 163",
        "addressLocality": "Ferrara",
        "postalCode": "44123",
        "addressCountry": "IT"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "Customer Service",
        "telephone": "+39 333 1676725",
        "email": "info@ostetricasilviabuzzoni.it"
      }
    }
  </script>
  <?php include 'modules/cookie-banner/cookie-banner.php'; ?>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1RH0YQGVRW"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-1RH0YQGVRW');
</script>

<body>

  <?php include 'include/menu.php'; ?>

  <section class="container-fluid regolo">
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
      <h1 class="title my-5">Il regolo digitale</h1>
      <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center w-100">
        <div class="col-lg-6 mb-3 mb-lg-0 d-flex flex-column align-items-center justify-content-center wheel-container">
          <!-- Regolo digitale interattivo -->
          <img src="assets/img/regolo-ostetrico-outside.webp" class="img-fluid outer-circle" alt="Regolo Ostetrico Mesi">
          <img src="assets/img/regolo-ostetrico-inside.webp" class="img-fluid inner-circle" alt="Regolo Ostetrico Dettagli" id="innerCircle">
        </div>

        <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center text-center" id="resultContainer">
          <p class="regolo-text">Gira il regolo o seleziona la data del<br>primo giorno della tua ultima mestruazione:<br><input type="text" id="data-output" class="regolo-result text-center" readonly></p>
          <h2 class="text-center regolo-title mb-3">Le fasi della tua gravidanza</h2>
          <div class="regolo-results">
            <p class="regolo-text">Data presunta del parto:<br><span id="dueDate" class="regolo-result"></span></p>
            <p class="regolo-text">Attualmente sei a:<br><span id="currentWeeks" class="regolo-result"></span></p>
            <p class="regolo-text">Data inizio 37° settimana:<br><span id="week37" class="regolo-result"></span></p>
            <p class="regolo-text">Eco 1° trimestre:<br><span id="firstTrimesterScan" class="regolo-result"></span></p>
            <p class="regolo-text">Ecografia morfologica:<br><span id="morphologicalScan" class="regolo-result"></span></p>
            <p class="regolo-text">Controllo presentazione fetale:<br><span id="fetalPresentationControl" class="regolo-result"></span></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'include/footer.php'; ?>

  <script src="modules/contact-form/contact-form.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/it.js"></script>
  <script src="assets/js/nav-drop-down.js"></script>
  <script src="assets/js/scrollToSection.js"></script>
  <script src="assets/js/regolo-digitale.js"></script>


</body>

</html>