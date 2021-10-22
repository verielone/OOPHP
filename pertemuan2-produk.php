<?php

// jualan produk
// komik, game

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setLabel() {
        return "$this->judul, $this->penulis";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Produk("Doraemon", "Savenda", "Shonen", 29000);

echo "Komik : " . $produk1->setLabel();
echo "<br>";
echo "Komik : " . $produk2->setLabel();