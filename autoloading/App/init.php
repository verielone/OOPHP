<?php

// require_once 'Produk/infoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

// fungsi yg diatas sama dengan yg dibawah

spl_autoload_register(function( $class ){
    require_once __DIR__ . '/Produk/' . $class . '.php';
});