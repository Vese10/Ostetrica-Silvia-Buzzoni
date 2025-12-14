<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Consulenza in Gravidanza - Ostetrica Silvia Buzzoni">
  <meta property="og:description" content="D.ssa Silvia Buzzoni Ostetrica Libera Professionista a Ferrara e provincia - Consulenza in Gravidanza">
  <meta property="og:image" content="https://ostetricasilviabuzzoni.it/assets/img/favicon.webp">
  <meta property="og:url" content="https://ostetricasilviabuzzoni.it/consulenza-in-gravidanza">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="it_IT">
  <meta name="description" content="Dottoressa Silvia Buzzoni Ostetrica Libera Professionista a Ferrara e provincia - Consulenza in Gravidanza">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.webp">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <title>Consulenza in Gravidanza - Ostetrica Silvia Buzzoni</title>
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

  <section class="container-fluid d-flex flex-column justify-content-between align-items-center p-0 gravidanza-section text-center" id="gravidanza-section">
    <h1 class="title px-4 mt-5">Consulenza ostetrica</h1>
    <div class="container-fluid d-flex flex-column p-0">
      <div class="domicilio-cont ">
        <img src="assets/img/consulenza-in-gravidanza-ferrara.webp" alt="Donna incinta durante manovre in consulenza ostetrica a Ferrara" loading="lazy" class="img-fluid visita-grav-img">
      </div>
      <div class="row justify-content-center p-0">
        <div class="d-flex flex-column align-items-center justify-content-center p-2 p-lg-5 visit-cont">
          <p class="text">La consulenza ostetrica in gravidanza è pensata per offrire un’assistenza personalizzata alla donna in gravidanza.</p>
          <p class="text">I motivi più frequenti per cui le donne richiedono una consulenza specifica sono:</p>
          <ul class="text list-acc">
            <li>Il mio bimbo è podalico nonostante io sia oltre le 32 settimane di gravidanza, come posso favorire il suo rivolgimento?</li>
            <li>Ho un’induzione del parto programmata ma vorrei evitarla, come posso stimolare il parto in modo naturale?</li>
            <li>Desidero approfondire le tecniche di respirazione e le posizioni libere in vista del mio travaglio di parto.</li>
            <li>Desidero prepararmi all’allattamento informandomi il più possibile già in gravidanza.</li>
          </ul>
          <p class="text">Ogni consulenza si svolgerà “su misura” in base alla richiesta della donna e avrà la durata di un’ora.</p>

          <a href="https://ostetricasilviabuzzoni.simplybook.it/v2/#book/service/12/count/1/" target="_blank" class="btn btn-accordion">Prenota visita</a>
        </div>
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