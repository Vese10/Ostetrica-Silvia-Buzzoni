<?php
$pageName = basename($_SERVER['PHP_SELF']);
if ($pageName == "index.php") {
  $path = "";
} else {
  $path = "/";
}
?>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid navbar-cont">
    <!-- Logo desktop -->
    <a class="navbar-brand ms-3 d-none d-xl-flex align-items-center" href="https://ostetricasilviabuzzoni.it/">
      <img src="/assets/img/ostetrica-silvia-buzzoni-logo.webp" alt="Logo Ostetrica Silvia Buzzoni" class="logo-immagine"> <!-- Logo aziendale -->
      <img src="/assets/img/ostetrica-silvia-buzzoni-logo-scritta.webp" alt="Scritta Ostetrica Silvia Buzzoni" class="ms-2 logo-scritta">
      <!-- Seconda immagine -->
    </a>


    <!-- Logo mobile -->
    <a class="navbar-brand d-xl-none" href="https://ostetricasilviabuzzoni.it/">
      <img src="/assets/img/ostetrica-silvia-buzzoni-logo.webp" alt="Logo Mobile Ostetrica Silvia Buzzoni">
    </a>

    <a class="navbar-brand d-xl-none img-scritta-mobile-cont" href="https://ostetricasilviabuzzoni.it/">
      <img src="/assets/img/ostetrica-silvia-buzzoni-logo-scritta.webp" class="img-scritta-mobile" alt="Logo Mobile Ostetrica Silvia Buzzoni">
    </a>

    <!-- Bottone mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu desktop -->
    <div class="collapse navbar-collapse justify-content-end dropdown-open" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link me-4" href="javascript:void(0);" onclick="scrollToChiSono()">Chi sono</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-4" href="javascript:void(0);" onclick="scrollToServizi()">Cosa faccio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link me-4 dropdown-toggle" href="#third-section" id="servicesDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Servizi <i class="bi bi-caret-down-fill"></i>
          </a>
          <!-- Dropdown Servizi -->
          <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
            <!-- Servizi per la gravidanza -->
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="https://ostetricasilviabuzzoni.it/servizi-in-gravidanza">Servizi per la gravidanza</a>
              <ul class="dropdown-menu sub">
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/visita-in-gravidanza">Visita in gravidanza</a></li>
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/pavimento-pelvico-in-gravidanza">Valutazione pavimento pelvico</a></li>
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/consulenza-in-gravidanza">Consulenza ostetrica</a></li>
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/acquaticita-in-gravidanza">Acquaticità in gravidanza</a></li>
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/corso-pre-parto-ferrara">Corso pre parto</a></li>
              </ul>
            </li>
            <!-- Servizi per il travaglio ed il parto -->
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="https://ostetricasilviabuzzoni.it/travaglio-e-parto">Servizi per il travaglio ed il parto</a>
              <ul class="dropdown-menu sub">
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/accompagnamento-in-ospedale">Accompagnamento in sala parto</a></li>
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/parto-a-casa">Assistenza al parto a domicilio</a></li>
              </ul>
            </li>
            <!-- Servizi nel post parto -->
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="https://ostetricasilviabuzzoni.it/post-parto">Servizi nel post parto</a>
              <ul class="dropdown-menu sub">
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/consulenza-allattamento">Consulenza allattamento</a></li>
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/visita-post-parto">Visita ostetrica nel post parto</a></li>
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/acquaticita-neonatale">Acquaticità neonatale</a></li>
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/corso-di-gruppo-svezzamento">Corso Svezzamento e Disostruzione</a></li>
              </ul>
            </li>
            <!-- Servizi in tutte le fasi di vita della donna -->
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="https://ostetricasilviabuzzoni.it/per-le-donne">Servizi in tutte le fasi di vita della donna</a>
              <ul class="dropdown-menu sub">
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/riabilitazione-pavimento-pelvico">Riabilitazione pavimento pelvico</a></li>
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/pap-test-e-tamponi">Pap test e tamponi</a></li>
              </ul>
            </li>
            <!-- Regolo Digitale -->
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Strumenti Ostetrici</a>
              <ul class="dropdown-menu sub">
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/regolo">Regolo Ostetrico Digitale</a></li>
                <li><a class="dropdown-item" href="https://ostetricasilviabuzzoni.it/calcolo-calo-fisiologico">Calcolo calo fisiologico</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link me-4" href="javascript:void(0);" onclick="scrollToDoveLavoro()">Dove mi trovi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-5" href="javascript:void(0);" onclick="scrollToContatti()">Contatti</a>
        </li>
      </ul>
      <!-- Pulsanti Tariffario e Prenota -->
      <ul class="navbar-nav">
        <li class="nav-item btn-item">
          <a class="btn bg-light me-5 mb-2 mb-lg-0 btn-app" href="https://ostetricasilviabuzzoni.simplybook.it/v2/" target="_blank">Prenota Appuntamento</a>
        </li>
      </ul>
    </div>
  </div>
</nav>