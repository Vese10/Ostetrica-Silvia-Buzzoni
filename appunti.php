<?php
  // Includi i file degli articoli e assegna a variabili separate
  include 'modules/articles-nascita.php';
  $articles_nascita = $articles; // articoli "storie di nascita"

  include 'modules/articles-info.php';
  $articles_info = $articles; // articoli "parla l'ostetrica"

  // Prendi i primi 2 articoli di ciascun array
  $latest_nascita = array_slice($articles_nascita, 0, 2);
  $latest_info    = array_slice($articles_info, 0, 2);
  ?>

  <!-- Sezione articoli in homepage -->
  <section id="latest-articles" class="container-fluid latest-articles">
    <div class="row">
      <h2 class="title mt-lg-0 mt-5 text-center">I miei articoli</h2>
      <!-- Colonna Storie di Nascita -->
      <div class="d-flex flex-column align-items-center col-md-6 px-5">
        <h3 class="title-article">Storie di Nascita</h3>
        <div class="d-flex flex-lg-row flex-column justify-content-around p-3">
          <?php foreach ($latest_nascita as $article): ?>
            <div class="d-flex flex-column align-items-center col-md-5 article-preview mb-4">
              <a href="<?php echo $article['url']; ?>" class="d-flex flex-column align-items-center title">
                <img src="<?php echo $article['image']; ?>"
                  alt="<?php echo htmlspecialchars($article['title']); ?>"
                  class="img-fluid" loading="lazy">
                <h4 class="sub-title pt-3"><?php echo $article['title']; ?></h4>
                <p class="text text-center"><?php echo $article['date']; ?></p>
                <a href="<?php echo $article['url']; ?>" class="btn btn-accordion w-100">Leggi</a>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <!-- Colonna Parla l'ostetrica -->
      <div class="d-flex flex-column align-items-center col-md-6 px-5">
        <h3 class="title-article">Parla l'ostetrica</h3>
        <div class="d-flex flex-lg-row flex-column justify-content-around p-3">
          <?php foreach ($latest_info as $article): ?>
            <div class="d-flex flex-column align-items-center col-md-5 article-preview mb-4">
              <a href="<?php echo $article['url']; ?>" class="d-flex flex-column align-items-center title">
                <img src="<?php echo $article['image']; ?>"
                  alt="<?php echo htmlspecialchars($article['title']); ?>"
                  class="img-fluid" loading="lazy">
                <h4 class="sub-title pt-3"><?php echo $article['title']; ?></h4>
                <p class="text text-center"><?php echo $article['date']; ?></p>
                <a href="<?php echo $article['url']; ?>" class="btn btn-accordion w-100">Leggi</a>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>