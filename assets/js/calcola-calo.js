function calcolaCalo() {
  const pesoNascita = parseFloat(document.getElementById('pesoNascita').value);
  const pesoAttuale = parseFloat(document.getElementById('pesoAttuale').value);
  const risultatoDiv = document.getElementById('risultato');

  if (isNaN(pesoNascita) || isNaN(pesoAttuale) || pesoNascita <= 0 || pesoAttuale <= 0) {
    risultatoDiv.innerHTML = '<p class="text-danger">Inserisci valori validi per entrambi i campi.</p>';
    return;
  }

  const caloPercentuale = ((pesoNascita - pesoAttuale) / pesoNascita) * 100;

  risultatoDiv.innerHTML = `<p class="regolo-text">Il calo fisiologico è del <span class="regolo-result">${caloPercentuale.toFixed(2)}%</span>.</p>`;
}