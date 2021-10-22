<?php

// jualan produk
// komik, game

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function setLabel() {
        return "$this->judul, $this->penulis";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 30000;

$produk2 = new Produk();
$produk2->judul = "Doraemon";
$produk2->penulis = "Savenda";
$produk2->penerbit = "Shonen";
$produk2->harga = 29000;

echo "Komik : " . $produk1->setLabel();
echo "<br>";
echo "Komik : " . $produk2->setLabel();