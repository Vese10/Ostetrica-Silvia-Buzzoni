<?php
$articles = [
  [
    'url'   => "/blog/parla-l'ostetrica/taglio-cordone-ombelicale",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Siamo così sicuri che attendere 2-3 minuti prima di tagliare il cordone ombelicale sia sufficiente?",
    'date'  => '24 Settembre 2024'
  ],
  [
    'url'   => "/blog/parla-l'ostetrica/giornata-internazionale-parto-a-casa",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Buona giornata internazionale del parto in casa!🏡❤️",
    'date'  => '6 Giugno 2024'
  ],
  [
    'url'   => "/blog/parla-l'ostetrica/colostro-in gravidanza",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Creare una piccola scorta di colostro fin dalla gravidanza 💛",
    'date'  => '13 Maggio 2024'
  ],
  [
    'url'   => "/blog/parla-l'ostetrica/perchè-amo-l'ostetricia",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "4 COSE CHE AMO DEL MIO LAVORO:",
    'date'  => '20 Marzo 2024'
  ],
  [
    'url'   => "/blog/parla-l'ostetrica/nascere-in-casa",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Nascere in casa si può❤️",
    'date'  => '10 Febbraio 2024'
  ],
  [
    'url'   => "/blog/parla-l'ostetrica/swaddling",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Conosci lo swaddling?",
    'date'  => '6 Gennaio 2024'
  ],
  [
    'url'   => "/blog/parla-l'ostetrica/facciamo-l'amore",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Facciamo l'amore!❤️",
    'date'  => '28 dicembre 2023'
  ],
  [
    'url'   => "/blog/parla-l'ostetrica/antibiotico-ai-neonati",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Antibiotico a tutti i neonati?
          Anche no!💊",
    'date'  => '4 dicembre 2023'
  ],
];

// Converti le date in timestamp per ordinarle
usort($articles, function ($a, $b) {
  return strtotime(str_replace(
    ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
    ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
    $b['date']
  )) - strtotime(str_replace(
    ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
    ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
    $a['date']
  ));
});
