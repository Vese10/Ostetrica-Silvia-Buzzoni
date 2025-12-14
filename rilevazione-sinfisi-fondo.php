<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Rilevazione Sinfisi-Fondo -  Ostetrica Silvia Buzzoni">
  <meta property="og:description" content="D.ssa Silvia Buzzoni Ostetrica Libera Professionista a Ferrara e provincia - Rilevazione Sinfisi-Fondo">
  <meta property="og:image" content="https://ostetricasilviabuzzoni.it/assets/img/favicon.webp">
  <meta property="og:url" content="https://ostetricasilviabuzzoni.it/rilevazione-sinfisi-fondo">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="it_IT">
  <meta name="description" content="D.ssa Silvia Buzzoni Ostetrica Libera Professionista a Ferrara e provincia - Rilevazione Sinfisi-Fondo">
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.webp">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <title>Rilevazione Sinfisi-Fondo - Ostetrica Silvia Buzzoni</title>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
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
    <div class="col-lg-6 container-fluid d-flex flex-column align-items-center justify-content-center">
      <h1 class="title my-5">Rilevazione sinfisi-fondo</h1>
      <div class="d-flex flex-column align-items-center justify-content-center w-100 sinfisi-container">
        <h4 class="mt-4 regolo-title">Dati paziente</h4>
        <form id="sinfisiForm" class="w-100">
          <div class="mb-3">
            <label for="nome" class="form-label regolo-text">Nome paziente</label>
            <input type="text" class="form-control" id="nome" required>
          </div>
          <div class="mb-3">
            <label for="dataNascita" class="form-label regolo-text">Data di nascita</label>
            <input type="date" class="form-control" id="dataNascita" required>
          </div>
          <div class="mb-3">
            <label for="dataParto" class="form-label regolo-text">Data presunta del parto</label>
            <input type="date" class="form-control" id="dataParto" required>
          </div>

          <h4 class="mt-4 regolo-title">Inserisci visite</h4>
          <div id="visiteContainer">
            <!-- Campi dinamici per le visite -->
          </div>

          <button type="button" class="btn btn-accordion m-2" onclick="aggiungiVisita()">Aggiungi Visita</button>
          <button type="submit" class="btn btn-accordion m-2">Genera Grafico</button>
        </form>
        <canvas id="sinfisiChart" width="150" height="300" class="mt-4"></canvas>
        <div class="text-center mt-4">
          <button type="button" id="resetButton" class="btn btn-accordion m-2 d-none" onclick="resettaDati()">Resetta dati</button>
          <button type="button" id="generatePdfButton" class="btn btn-accordion m-2 d-none" onclick="generaPDF()">Genera PDF</button>
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    let visite = [];

    function aggiungiVisita() {
      const visiteContainer = document.getElementById('visiteContainer');
      const index = visite.length;

      const visitaDiv = document.createElement('div');
      visitaDiv.classList.add('visita-entry', 'mb-3');

      visitaDiv.innerHTML = `
            <div class="mb-2">
                <label for="dataVisita${index}" class="form-label regolo-text">Giorno della visita</label>
                <input type="date" class="form-control visita-data" id="dataVisita${index}" required>
            </div>
            <div class="mb-2">
                <label for="misurazione${index}" class="form-label regolo-text">Misurazione sinfisi-fondo (cm)</label>
                <input type="number" class="form-control visita-misurazione" id="misurazione${index}" step="any" required>
            </div>
        `;

      visiteContainer.appendChild(visitaDiv);
      visite.push(index);
    }

    function resettaDati() {
      // Reset dei campi di input
      document.getElementById('sinfisiForm').reset();

      // Rimuove le visite dinamiche aggiunte
      document.getElementById('visiteContainer').innerHTML = '';
      visite = [];

      // Distrugge il grafico se esiste
      if (window.myChart) {
        window.myChart.destroy();
      }

      // Nasconde di nuovo il pulsante di reset
      document.getElementById('resetButton').classList.add('d-none');
      document.getElementById('generatePdfButton').classList.add('d-none');
    }

    document.getElementById('sinfisiForm').addEventListener('submit', function(event) {
      event.preventDefault();

      const dataPartoInput = document.getElementById('dataParto').value;
      if (!dataPartoInput) {
        alert("Inserisci la data presunta del parto.");
        return;
      }

      const dataParto = new Date(dataPartoInput);
      let datiVisite = [];

      const dateElements = document.querySelectorAll(".visita-data");
      const misuraElements = document.querySelectorAll(".visita-misurazione");

      dateElements.forEach((dateElement, index) => {
        const dataVisitaInput = dateElement.value;
        const misurazioneInput = misuraElements[index].value;

        if (dataVisitaInput && misurazioneInput) {
          const dataVisita = new Date(dataVisitaInput);
          const misurazione = parseFloat(misurazioneInput);

          if (isNaN(misurazione) || misurazione <= 0) {
            alert(`La misurazione alla visita ${index + 1} non è valida.`);
            return;
          }

          // Calcolo della settimana gestazionale correggendo l'errore precedente
          const diffDays = Math.floor((dataParto - dataVisita) / (1000 * 60 * 60 * 24));
          const weeksGestation = 40 - Math.floor(diffDays / 7);

          if (weeksGestation >= 16 && weeksGestation <= 44) {
            datiVisite.push({
              week: weeksGestation,
              measurement: misurazione
            });
          } else {
            alert(`La visita ${index + 1} non rientra nelle settimane 16-44. (Calcolata: ${weeksGestation})`);
          }
        }
      });

      if (datiVisite.length === 0) {
        alert("Inserisci almeno una visita valida con una misurazione.");
        return;
      }

      console.log("Dati visite:", datiVisite);

      // Preparazione dei dati per il grafico
      // Settimane di riferimento
      const weeks = [16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44];

      // Valori di riferimento aggiornati
      const referenceLine = [12.8, 14.3, 15.8, 17.3, 18.8, 19.825, 20.85, 21.875, 22.9, 23.875, 24.85, 25.825, 26.8, 27.65, 28.5, 29.35, 30.2, 31.075, 31.95, 32.825, 33.7, 34.5, 35.25, 35.875, 36.2, 36.5, 36.8, 37.0, 37.0];
      const minRange = [9.7, 11.2, 12.7, 14.2, 15.7, 16.725, 17.75, 18.775, 19.8, 20.775, 21.75, 22.725, 23.7, 24.55, 25.4, 26.25, 27.1, 27.95, 28.8, 29.65, 30.5, 31.15, 31.8, 32.45, 33.1, 33.3, 33.5, 33.6, 33.6];
      const maxRange = [15.9, 17.4, 18.9, 20.4, 21.9, 22.9, 23.95, 24.975, 26.0, 26.975, 27.95, 28.92, 29.9, 30.75, 31.59, 32.449, 33.3, 34.175, 35.05, 35.925, 36.8, 37.425, 38.05, 38.675, 39.3, 39.6, 39.9, 40.0, 40.0];

      const userData = new Array(weeks.length).fill(null);

      datiVisite.forEach(visita => {
        const index = weeks.indexOf(visita.week);
        if (index !== -1) {
          userData[index] = visita.measurement;
        }
      });

      // Generazione del grafico
      const ctx = document.getElementById('sinfisiChart').getContext('2d');
      if (window.myChart) {
        window.myChart.destroy();
      }

      window.myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: weeks,
          datasets: [{
              label: 'Misura sinfisi-fondo in cm',
              data: userData,
              borderColor: 'red',
              backgroundColor: 'rgba(255, 0, 0, 0.2)',
              borderWidth: 2,
              fill: false,
              pointRadius: 2,
              pointBackgroundColor: 'red',
              tension: 0,
              spanGaps: true
            },
            {
              label: 'Linea di riferimento',
              data: referenceLine,
              borderColor: 'black',
              borderWidth: 2,
              borderDash: []
            },
            {
              label: 'Range fisiologico',
              data: maxRange,
              borderColor: 'rgba(0, 128, 0, 0.5)',
              borderWidth: 1,
              borderDash: [5, 5],
              fill: '+1'
            },
            {
              label: '',
              data: minRange,
              borderColor: 'rgba(0, 128, 0, 0.5)',
              borderWidth: 1,
              borderDash: [5, 5],
              fill: '-1'
            }
          ]
        },
        options: {
          responsive: true,
          scales: {
            x: {
              title: {
                display: true,
                text: 'Settimane gestazionali'
              }
            },
            y: {
              title: {
                display: true,
                text: 'Misurazione sinfisi-fondo (cm)'
              },
              min: 0,
              max: 50
            }
          }
        }
      });

      // Mostra il pulsante di reset dopo la generazione del grafico
      document.getElementById('resetButton').classList.remove('d-none');

    });

    function generaPDF() {
      const {
        jsPDF
      } = window.jspdf;
      const doc = new jsPDF();

      // Recupero dei valori del form
      const nomePaziente = document.getElementById('nome').value;
      const dataNascita = formatDate(document.getElementById('dataNascita').value);
      const dataParto = formatDate(document.getElementById('dataParto').value);

      let riepilogoVisite = "Riepilogo Visite:\n";

      const dateElements = document.querySelectorAll(".visita-data");
      const misuraElements = document.querySelectorAll(".visita-misurazione");

      dateElements.forEach((dateElement, index) => {
        const dataVisita = dateElement.value;
        const misurazione = misuraElements[index].value;

        if (dataVisita && misurazione) {
          const dataPartoDate = new Date(document.getElementById('dataParto').value);
          const dataVisitaDate = new Date(dataVisita);
          const diffDays = Math.floor((dataPartoDate - dataVisitaDate) / (1000 * 60 * 60 * 24));
          const weeksGestation = 40 - Math.floor(diffDays / 7);

          riepilogoVisite += `Visita ${index + 1}: ${formatDate(dataVisita)} - Settimana ${weeksGestation}, Misurazione: ${misurazione} cm\n`;
        }
      });

      // Aggiunta dei dati al PDF
      doc.setFontSize(18);
      doc.text("Rilevazione Sinfisi-Fondo", 10, 10);

      doc.setFontSize(8);
      doc.text("(Carta della distanza sinfisi-fondo basata sui dati di Cardiff (Calvert JP.et al -47) BMJ 285:846-9-198)", 10, 13);

      doc.setFontSize(12);
      doc.text(`Nome e Cognome: ${nomePaziente}`, 10, 20);
      doc.text(`Data di nascita: ${dataNascita}`, 10, 30);
      doc.text(`Data presunta del parto: ${dataParto}`, 10, 40);

      doc.setFontSize(14);
      doc.text("Riepilogo visite", 10, 50);
      doc.setFontSize(10);
      doc.text(riepilogoVisite, 10, 60);

      // Ottenere immagine del grafico direttamente dal canvas
      const canvas = document.getElementById('sinfisiChart');
      const imgData = canvas.toDataURL('image/png'); // Converte il canvas in immagine

      // Aggiungere immagine al PDF
      doc.addImage(imgData, 'PNG', 10, 80, 180, 200);

      // Salvataggio del PDF
      doc.save(`Rilevazione_${nomePaziente.replace(/\s+/g, '_')}.pdf`);
    }

    // Funzione per formattare la data nel formato dd/mm/yyyy
    function formatDate(dateString) {
      const date = new Date(dateString);
      const day = String(date.getDate()).padStart(2, '0');
      const month = String(date.getMonth() + 1).padStart(2, '0');
      const year = date.getFullYear();
      return `${day}/${month}/${year}`;
    }

    // Mostra il pulsante "Genera PDF" dopo la generazione del grafico
    document.getElementById('sinfisiForm').addEventListener('submit', function() {
      document.getElementById('generatePdfButton').classList.remove('d-none');
    });
  </script>


</body>

</html>