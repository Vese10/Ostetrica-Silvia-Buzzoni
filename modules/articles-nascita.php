<?php
$articles = [
  [
    'url'   => "/blog/storie-di-nascita/nascita-diletta",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Rinasce una donna ed un’intera famiglia🧡",
    'date'  => '17 Febbraio 2025'
  ],
  [
    'url'   => "/blog/storie-di-nascita/nascita-michele",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Michele",
    'date'  => '31 Gennaio 2025'
  ],
  [
    'url'   => "/blog/storie-di-nascita/nascita-matilde",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Matilde",
    'date'  => '23 Novembre 2024'
  ],
  [
    'url'   => "/blog/storie-di-nascita/nascita-paloma",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "“Tu puedes!” ❤️",
    'date'  => '8 Ottobre 2024'
  ],
  [
    'url'   => "/blog/storie-di-nascita/nascita-elia",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Elia",
    'date'  => '6 Agosto 2024'
  ],
  [
    'url'   => "/blog/storie-di-nascita/nascita-olivia",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "“Olivia in arrivo“",
    'date'  => '27 Maggio 2024'
  ],
  [
    'url'   => "/blog/storie-di-nascita/nascita-bianca",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Bianca",
    'date'  => '5 Aprile 2024'
  ],
  [
    'url'   => "/blog/storie-di-nascita/nascita-giacomo",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Giacomo",
    'date'  => '25 Febbraio 2024'
  ],
  [
    'url'   => "/blog/storie-di-nascita/nascita-atena",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Piccola Atena",
    'date'  => '1 Febbraio 2024'
  ],
  [
    'url'   => "/blog/storie-di-nascita/nascita-ettore",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Ettore, bimbo deciso!🩵",
    'date'  => '29 dicembre 2023'
  ],
  [
    'url'   => "/blog/storie-di-nascita/nascita-noemi",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Noemi, La tua grinta ti si legge tutta in viso.",
    'date'  => '15 dicembre 2023'
  ],
  [
    'url'   => "/blog/storie-di-nascita/nascita-ida",
    'image' => '/assets/img/immagine-prova.jpg',
    'title' => "Piccola Ida",
    'date'  => '2 dicembre 2023'
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
