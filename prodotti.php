<?php
require_once 'categorie.php';
require_once 'tipiArticolo.php';

$prodotti = [
    new Prodotto("Pallina da tennis", "ciao", "https://ss-pics.s3.eu-west-1.amazonaws.com/files/1036351/large-61X1W2PAV5L._SL1000_.jpg?1582104879", $categoriaCani, $gioco),
    new Prodotto("Croccantini al salmone", 12, "https://www.animalhouseitalia.it/17095/trainer-natural-kitten-salmone-gr-300-croccantini-per-gatto.jpg", $categoriaGatti, $cibo),
    new Prodotto("Cuccia morbida", 45, "https://www.gardenbedettishop.com/16599-large_default/cuccia-per-cani-charles-50-ferplast.jpg", $categoriaCani, $cucce),
    new Prodotto("Topo di peluche", 7, "https://www.toctocshop.com/media/catalog/product/cache/1b40543c03522e70d25a2e1d291e4ce9/f/f/ff7308b362ebe8ed85371b323662e9e85afe587802adc2eef8adb255759844df.jpeg", $categoriaGatti, $gioco),
    new Prodotto("Scatoletta di manzo", 3, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxQHCAwqNgP2lfFDqziKBqTSiNl9VSCCTndQ&s", $categoriaCani, $cibo)
];
?>
