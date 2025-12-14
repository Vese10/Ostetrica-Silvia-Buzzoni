<?php include 'modules/articles-nascita.php'; ?>
<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Storie di Nascita a Ferrara e dintorni - Ostetrica Silvia Buzzoni">
  <meta property="og:description" content="D.ssa Silvia Buzzoni Ostetrica Libera Professionista a Ferrara e provincia - Storie di Nascita">
  <meta property="og:image" content="https://ostetricasilviabuzzoni.it/assets/img/favicon.webp">
  <meta property="og:url" content="https://ostetricasilviabuzzoni.it/storie-di-nascita">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="it_IT">
  <meta name="description" content="Qui troverai le storie delle nascite a domicilio o degli accompagnamenti in ospedale delle famiglie che ho avuto il piacere di seguire nel loro percorso">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.webp">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="canonical" href="https://ostetricasilviabuzzoni.it/storie-di-nascita">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <title>Storie di Nascita a Ferrara e dintorni - Ostetrica Silvia Buzzoni</title>
  <!-- Dati strutturati Schema.org in formato JSON-LD -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Blog",
      "name": "Storie di Nascita",
      "description": "Qui troverai le storie delle nascite a domicilio o degli accompagnamenti in ospedale delle famiglie che ho avuto il piacere di seguire nel loro percorso",
      "publisher": {
        "@type": "MedicalOrganization",
        "name": "Ostetrica Silvia Buzzoni",
        "url": "https://ostetricasilviabuzzoni.it",
        "logo": {
          "@type": "ImageObject",
          "url": "https://ostetricasilviabuzzoni.it/assets/img/favicon.webp"
        },
        "description": "Ostetrica libera professionista a Ferrara. Servizi di assistenza ostetrica durante gravidanza, parto e post-parto."
      },
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

  <main class="container-fluid d-flex flex-column justify-content-center align-items-center p-0 py-lg-5 stories-section text-center">
    <h1 class="title">Storie di Nascita</h1>
    <div class="row p-5 articles-cont">
      <?php foreach ($articles as $article): ?>
        <div class="col-md-4 mb-4">
          <div class="article-preview">
            <a class="title" href="<?php echo $article['url']; ?>">
              <img src="<?php echo $article['image']; ?>" alt="<?php echo htmlspecialchars($article['title']); ?>" class="img-fluid articles-img" loading="lazy">
              <h2 class="sub-title pt-3"><?php echo $article['title']; ?></h2>
              <p class="text text-center"><?php echo $article['date']; ?></p>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </main>

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