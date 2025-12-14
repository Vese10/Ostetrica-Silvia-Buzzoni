// Funzione generale per scroll con offset
function scrollToSection(sectionId) {
  const section = document.getElementById(sectionId);
  if (!section) return; // Verifica che la sezione esista
  const offset = 100;
  const sectionPosition = section.getBoundingClientRect().top + window.scrollY;

  window.scrollTo({
    top: sectionPosition - offset,
    behavior: "smooth",
  });
}

// Gestione del click sui link del menu
function scrollToChiSono() {
  if (window.location.pathname !== "/") {
    window.location.href = "/#second-section";
  } else {
    scrollToSection("second-section");
  }
}

function scrollToServizi() {
  if (window.location.pathname !== "/") {
    window.location.href = "/#third-section";
  } else {
    scrollToSection("third-section");
  }
}

function scrollToDoveLavoro() {
  if (window.location.pathname !== "/") {
    window.location.href = "/#fourth-section";
  } else {
    scrollToSection("fourth-section");
  }
}

function scrollToContatti() {
  if (window.location.pathname !== "/") {
    window.location.href = "/#fifth-section";
  } else {
    scrollToSection("fifth-section");
  }
}

// Applicare offset quando c'è un hash nella URL
window.onload = function () {
  if (window.location.hash) {
    const sectionId = window.location.hash.substring(1); // Rimuove il # dall'hash
    scrollToSection(sectionId);
  }
};

window.addEventListener("load", function () {
  document.body.classList.add("loaded");
});
