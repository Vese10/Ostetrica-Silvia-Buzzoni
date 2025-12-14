// OK
const innerCircle = document.getElementById("innerCircle");
const dateDisplay = document.getElementById("data-output");
const clickSound = new Audio("/assets/sounds/regolo-sound.mp3"); // Percorso del suono di click

// Variabili per tracciare lo stato
let currentDate = new Date(2025, 0, 1); // Data iniziale: 1 Gennaio 2025
let totalRotation = 0; // Rotazione accumulata in gradi

// Inizializza Flatpickr per il campo data
flatpickr(dateDisplay, {
  locale: "it",
  dateFormat: "d F Y",
  altInput: true,
  altFormat: "d F Y",
  defaultDate: currentDate,
  onChange: function (selectedDates) {
    if (selectedDates.length > 0) {
      currentDate = selectedDates[0];
      updateDateDisplay(currentDate);
      synchronizeRotationWithDate(currentDate);
      calculatePregnancyStages(currentDate);
    }
  },
});

// Funzione per calcolare la data basata sulla rotazione
function updateDate(rotation) {
  const daysInYear = 365; // Giorni in un anno
  const degreesPerDay = 360 / daysInYear; // Gradi corrispondenti a un giorno

  // Calcola la differenza in giorni dalla rotazione e aggiorna la data di riferimento
  const daysToAdd = Math.round(rotation / degreesPerDay);
  const updatedDate = new Date(currentDate);
  updatedDate.setDate(updatedDate.getDate() + daysToAdd);

  // Aggiorna la data corrente e il display
  updateDateDisplay(updatedDate);

  // Calcolo delle date per gli eventi della gravidanza a partire dalla data aggiornata
  calculatePregnancyStages(updatedDate);

  // Sincronizza il campo Flatpickr con la nuova data
  synchronizeFlatpickrWithDate(updatedDate);
}

// Funzione per aggiornare il display della data
function updateDateDisplay(date) {
  dateDisplay.value = date.toLocaleDateString("it-IT", {
    day: "numeric",
    month: "long",
    year: "numeric",
  });
}

// Funzione per aggiornare le date delle fasi della gravidanza
function calculatePregnancyStages(referenceDate) {
  const dueDate = addDays(referenceDate, 280); // 40 settimane
  const week37 = addDays(referenceDate, 259); // 37 settimane
  const firstTrimesterScan = addDays(referenceDate, 90); // 12+6 settimane
  const morphologicalStart = addDays(referenceDate, 133); // 19 settimane
  const morphologicalEnd = addDays(referenceDate, 154); // 22 settimane
  const fetalPresentationControl = addDays(referenceDate, 224); // 32+0 settimane

  const formatDate = (date) => {
    const day = String(date.getDate()).padStart(2, "0");
    const month = date.toLocaleString("it-IT", { month: "long" });
    const year = date.getFullYear();
    return `${day} ${month} ${year}`;
  };

  // Calcola settimane e giorni attuali di gravidanza
  const currentDate = new Date();
  const diffTime = currentDate - referenceDate; // Differenza in millisecondi
  const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24)); // Differenza in giorni
  const weeks = Math.floor(diffDays / 7); // Calcolo settimane
  const days = diffDays % 7; // Giorni restanti

  document.getElementById("dueDate").innerText = formatDate(dueDate);
  document.getElementById(
    "currentWeeks"
  ).innerText = `${weeks} settimane + ${days} giorni`;
  document.getElementById("week37").innerText = formatDate(week37);
  document.getElementById("firstTrimesterScan").innerText =
    "entro il " + formatDate(firstTrimesterScan);
  document.getElementById("morphologicalScan").innerText =
    "tra il " +
    formatDate(morphologicalStart) +
    " e il " +
    formatDate(morphologicalEnd) +
    " circa";
  document.getElementById("fetalPresentationControl").innerText =
    "a partire dal " + formatDate(fetalPresentationControl);
}

/* 
 // Funzione per aggiornare le date delle fasi della gravidanza
function calculatePregnancyStages(referenceDate) {
  const currentDate = new Date();
  const maxPastDate = new Date();
  maxPastDate.setDate(currentDate.getDate() - 43 * 7); // Calcola la data 43 settimane fa

  // Controlla se la data selezionata è fuori intervallo
  if (referenceDate > currentDate || referenceDate < maxPastDate) {
    document.getElementById("currentWeeks").innerText = "Scegli una data reale";
    document.getElementById("dueDate").innerText = "";
    document.getElementById("week37").innerText = "";
    document.getElementById("firstTrimesterScan").innerText = "";
    document.getElementById("morphologicalScan").innerText = "";
    document.getElementById("fetalPresentationControl").innerText = "";
    return;
  }

  // Procedi con il calcolo se la data è valida
  const dueDate = addDays(referenceDate, 280); // 40 settimane
  const week37 = addDays(referenceDate, 259); // 37 settimane
  const firstTrimesterScan = addDays(referenceDate, 90); // 12+6 settimane
  const morphologicalStart = addDays(referenceDate, 133); // 19 settimane
  const morphologicalEnd = addDays(referenceDate, 154); // 22 settimane
  const fetalPresentationControl = addDays(referenceDate, 224); // 32+0 settimane

  const formatDate = (date) => {
    const day = String(date.getDate()).padStart(2, "0");
    const month = date.toLocaleString("it-IT", { month: "long" });
    const year = date.getFullYear();
    return `${day} ${month} ${year}`;
  };

  // Calcola settimane e giorni attuali di gravidanza
  const diffTime = currentDate - referenceDate; // Differenza in millisecondi
  const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24)); // Differenza in giorni
  const weeks = Math.floor(diffDays / 7); // Calcolo settimane
  const days = diffDays % 7; // Giorni restanti

  document.getElementById("dueDate").innerText = formatDate(dueDate);
  document.getElementById("currentWeeks").innerText = `${weeks} settimane + ${days} giorni`;
  document.getElementById("week37").innerText = formatDate(week37);
  document.getElementById("firstTrimesterScan").innerText =
    "entro il " + formatDate(firstTrimesterScan);
  document.getElementById("morphologicalScan").innerText =
    "tra il " +
    formatDate(morphologicalStart) +
    " e il " +
    formatDate(morphologicalEnd) +
    " circa";
  document.getElementById("fetalPresentationControl").innerText =
    "a partire dal " + formatDate(fetalPresentationControl);
}
 */

// Funzione di utilità per aggiungere giorni a una data
function addDays(date, days) {
  const result = new Date(date);
  result.setDate(result.getDate() + days);
  return result;
}

// Sincronizza la rotazione della ruota con la data scelta su Flatpickr
function synchronizeRotationWithDate(date) {
  const startOfYear = new Date(date.getFullYear(), 0, 1);
  const diffTime = date - startOfYear;
  const degreesPerDay = 360 / 365; // Gradi per ogni giorno dell'anno
  const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24));
  totalRotation = diffDays * degreesPerDay;
  innerCircle.style.transform = `rotate(${totalRotation}deg)`;
}

// Sincronizza il campo Flatpickr con la data aggiornata
function synchronizeFlatpickrWithDate(date) {
  flatpickr(dateDisplay, {
    locale: "it",
    defaultDate: date,
    altInput: true,
    altFormat: "d F Y",
  }).setDate(date, true);
}

// Eventi per il trascinamento della ruota
let isDragging = false;
let lastAngle = 0;

innerCircle.addEventListener("mousedown", (e) => {
  if (e.button !== 0) return; // Solo tasto sinistro del mouse
  isDragging = true;
  const rect = innerCircle.getBoundingClientRect();
  const centerX = rect.left + rect.width / 2;
  const centerY = rect.top + rect.height / 2;

  function calculateAngle(event) {
    const deltaX = event.clientX - centerX;
    const deltaY = event.clientY - centerY;
    return Math.atan2(deltaY, deltaX) * (180 / Math.PI);
  }

  lastAngle = calculateAngle(e);

  function onMouseMove(event) {
    if (!isDragging) return;

    const currentAngle = calculateAngle(event);
    let angleDiff = currentAngle - lastAngle;

    // Assicurati che l'angolo rimanga in un intervallo coerente
    if (angleDiff > 180) angleDiff -= 360;
    if (angleDiff < -180) angleDiff += 360;

    // Accumula la rotazione totale
    totalRotation += angleDiff;

    // Ruota visivamente il cerchio
    innerCircle.style.transform = `rotate(${totalRotation}deg)`;

    // Calcola i giorni in base alla rotazione
    updateDate(totalRotation);

    // Riproduci il suono di "click" ogni volta che cambia il giorno
    clickSound.play();

    lastAngle = currentAngle; // Aggiorna l'ultimo angolo
  }

  function onMouseUp() {
    isDragging = false;

    document.removeEventListener("mousemove", onMouseMove);
    document.removeEventListener("mouseup", onMouseUp);
  }

  document.addEventListener("mousemove", onMouseMove);
  document.addEventListener("mouseup", onMouseUp);
});

// Eventi touch per dispositivi mobili
innerCircle.addEventListener("touchstart", (e) => {
  isDragging = true;
  const rect = innerCircle.getBoundingClientRect();
  const centerX = rect.left + rect.width / 2;
  const centerY = rect.top + rect.height / 2;

  function calculateAngle(event) {
    const touch = event.touches[0] || event.changedTouches[0];
    const deltaX = touch.clientX - centerX;
    const deltaY = touch.clientY - centerY;
    return Math.atan2(deltaY, deltaX) * (180 / Math.PI);
  }

  lastAngle = calculateAngle(e);

  function onTouchMove(event) {
    if (!isDragging) return;

    event.preventDefault();
    const currentAngle = calculateAngle(event);
    let angleDiff = currentAngle - lastAngle;

    // Assicurati che l'angolo rimanga in un intervallo coerente
    if (angleDiff > 180) angleDiff -= 360;
    if (angleDiff < -180) angleDiff += 360;

    // Accumula la rotazione totale
    totalRotation += angleDiff;

    // Ruota visivamente il cerchio
    innerCircle.style.transform = `rotate(${totalRotation}deg)`;

    // Calcola i giorni in base alla rotazione
    updateDate(totalRotation);

    // Riproduci il suono di "click" ogni volta che cambia il giorno
    clickSound.play();

    lastAngle = currentAngle; // Aggiorna l'ultimo angolo
  }

  function onTouchEnd() {
    isDragging = false;

    document.removeEventListener("touchmove", onTouchMove);
    document.removeEventListener("touchend", onTouchEnd);
  }

  document.addEventListener("touchmove", onTouchMove, { passive: false });
  document.addEventListener("touchend", onTouchEnd);
});

// Aggiungi un listener per disabilitare il trascinamento quando il mouse lascia la finestra
document.addEventListener("mouseleave", () => {
  isDragging = false;
});
