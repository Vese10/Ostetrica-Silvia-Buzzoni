document.addEventListener("DOMContentLoaded", function () {
  // Dropdown principale "Servizi"
  var servicesDropdown = document.querySelector("#servicesDropdown").parentElement;
  var isServicesDropdownOpen = false; // Variabile per tracciare lo stato di apertura su mobile

  // Funzione per determinare se è un dispositivo mobile
  function isMobileDevice() {
    return window.innerWidth <= 768; // Breakpoint per mobile (768px)
  }

  // Gestione del mouseover per il menu principale (solo per desktop)
  servicesDropdown.addEventListener("mouseover", function () {
    if (!isMobileDevice()) {
      this.querySelector(".dropdown-menu").classList.add("show");
    }
  });

  servicesDropdown.addEventListener("mouseout", function () {
    if (!isMobileDevice()) {
      this.querySelector(".dropdown-menu").classList.remove("show");
    }
  });

  // Gestione del click per il menu principale "Servizi"
  servicesDropdown.addEventListener("click", function (e) {
    var dropdownMenu = this.querySelector(".dropdown-menu");

    // Verifica se il target è un link valido
    if (!e.target.href) {
      e.preventDefault(); // Previene il comportamento predefinito solo se non c'è href
    }

    if (isMobileDevice()) {
      // Su mobile, chiude il menu se è già aperto
      if (isServicesDropdownOpen) {
        dropdownMenu.classList.remove("show"); // Chiude il menu se già aperto
        isServicesDropdownOpen = false; // Imposta lo stato su chiuso
      } else {
        document.querySelectorAll(".dropdown-menu.show").forEach(function (menu) {
          menu.classList.remove("show"); // Chiude tutti i menu aperti
        });
        dropdownMenu.classList.add("show"); // Mostra il menu cliccato
        isServicesDropdownOpen = true; // Imposta lo stato su aperto
      }
    } else {
      // Chiudi tutti i menu aperti, tranne se è un secondo click sullo stesso menu
      if (dropdownMenu.classList.contains("show")) {
        dropdownMenu.classList.remove("show"); // Chiude il menu se già aperto (secondo click)
      } else {
        document.querySelectorAll(".dropdown-menu.show").forEach(function (menu) {
          menu.classList.remove("show"); // Chiude tutti i menu aperti
        });
        dropdownMenu.classList.add("show"); // Mostra il menu cliccato
      }
    }
  });

  // Sub-dropdowns (i menu all'interno di "Servizi")
  var subDropdowns = document.querySelectorAll(".dropdown-submenu");

  subDropdowns.forEach(function (dropdown) {
    var isOpen = false; // Variabile per tracciare lo stato di apertura del sub-dropdown

    // Gestione del mouseover per i sub-dropdowns (solo per desktop)
    dropdown.addEventListener("mouseover", function () {
      if (!isMobileDevice()) {
        this.querySelector(".dropdown-menu").classList.add("show");
      }
    });

    dropdown.addEventListener("mouseout", function () {
      if (!isMobileDevice()) {
        this.querySelector(".dropdown-menu").classList.remove("show");
        isOpen = false; // Reset dello stato di apertura
      }
    });

    // Gestione del click per i sub-dropdowns
    dropdown.addEventListener("click", function (e) {
      var dropdownMenu = this.querySelector(".dropdown-menu");

      if (isMobileDevice()) {
        // Comportamento su mobile: doppio click
        if (!isOpen) {
          e.preventDefault(); // Previene la navigazione al primo click
          e.stopPropagation(); // Blocca la propagazione del click verso l'alto

          // Chiude tutti gli altri sub-dropdowns aperti
          document.querySelectorAll(".dropdown-submenu .dropdown-menu.show").forEach(function (menu) {
            menu.classList.remove("show");
          });

          dropdownMenu.classList.add("show"); // Mostra il sub-dropdown cliccato
          isOpen = true; // Imposta lo stato su aperto
        } else {
          // Consente la navigazione al secondo click
          isOpen = false; // Reset dello stato per il prossimo click
        }
      } else {
        // Comportamento su desktop: singolo click
        e.stopPropagation(); // Blocca la propagazione del click verso l'alto

        // Chiude tutti gli altri sub-dropdowns aperti
        document.querySelectorAll(".dropdown-submenu .dropdown-menu.show").forEach(function (menu) {
          menu.classList.remove("show");
        });

        dropdownMenu.classList.add("show"); // Mostra il sub-dropdown cliccato
      }
    });
  });

  // Chiudere il menu al click sui nav-link tranne "Servizi"
  document.querySelectorAll(".nav-link").forEach(function (navLink) {
    navLink.addEventListener("click", function () {
      var isServicesLink = this.closest("#servicesDropdown");

      // Se non è il dropdown "Servizi", chiudi il menu
      if (!isServicesLink) {
        document.querySelector(".navbar-collapse").classList.remove("show");
      }
    });
  });

  // Chiudere il menu al click fuori dal menu
  document.addEventListener("click", function (e) {
    var isClickInside = e.target.closest(".navbar-collapse");

    if (!isClickInside) {
      document.querySelectorAll(".dropdown-menu.show").forEach(function (menu) {
        menu.classList.remove("show");
      });

      // Chiudi anche la navbar mobile
      document.querySelector(".navbar-collapse").classList.remove("show");
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var navbarToggler = document.querySelector(".navbar-toggler");
  var navbarCollapse = document.querySelector(".navbar-collapse");

  // Osservatore di mutazioni per monitorare i cambiamenti di classe
  var observer = new MutationObserver(function (mutationsList) {
    mutationsList.forEach(function (mutation) {
      if (mutation.attributeName === 'class') {
        // Controlla se la classe 'show' è stata aggiunta o rimossa
        if (navbarCollapse.classList.contains('show')) {
          navbarToggler.classList.add('open');
        } else {
          navbarToggler.classList.remove('open');
        }
      }
    });
  });

  // Configurazione dell'osservatore per osservare i cambiamenti delle classi
  observer.observe(navbarCollapse, { attributes: true });
});