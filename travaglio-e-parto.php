<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Servizi Travaglio e Parto - Ostetrica Silvia Buzzoni">
  <meta property="og:description" content="D.ssa Silvia Buzzoni Ostetrica Libera Professionista a Ferrara e provincia - Servizi Travaglio e Parto">
  <meta property="og:image" content="https://ostetricasilviabuzzoni.it/assets/img/favicon.webp">
  <meta property="og:url" content="https://ostetricasilviabuzzoni.it/travaglio-e-parto">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="it_IT">
  <meta name="description" content="Dottoressa Silvia Buzzoni Ostetrica Libera Professionista a Ferrara e provincia - Servizi Travaglio e Parto">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.webp">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <title>Servizi Travaglio e Parto - Ostetrica Silvia Buzzoni</title>
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

  <section class="container-fluid d-flex flex-column align-items-center p-2 p-lg-5 gravidanza-section" id="gravidanza-section">
    <h1 class="title text-center mt-lg-0 mt-5 mx-4">Servizi per il travaglio ed il parto</h1>

    <div class="container d-flex align-items-center justify-content-center p-0 m-0">
      <div class="row text-center w-100 mt-4">
        <div class="col-12 col-md-6 mb-3 mt-md-5 d-flex justify-content-center first">
          <a href="https://ostetricasilviabuzzoni.it/parto-a-casa" class="parto">
            Assistenza al Parto a Domicilio
          </a>
        </div>
        <div class="col-12 col-md-6 mb-3 mt-md-5 d-flex justify-content-center second">
          <a href="https://ostetricasilviabuzzoni.it/accompagnamento-in-ospedale" class="accompagnamento">
            Accompagnamento In Sala Parto
          </a>
        </div>
      </div>
  </section>

  <?php include 'include/contact.php'; ?>

  <?php include 'include/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="assets/js/nav-drop-down.js"></script>
  <script src="assets/js/scrollToSection.js"></script>
  <script src="modules/contact-form/contact-form.js"></script>
</body>

</html>