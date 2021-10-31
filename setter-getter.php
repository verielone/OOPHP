<?php

// jualan produk
// komik, game

class Produk {
    private $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judul ) {
        $this->judul = $judul;
        return $this->judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
        return $this->penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
        return $this->penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setHarga( $harga ) {
        $this->harga = $harga;
        return $this->harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100);
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} , {$this->setLabel()} , (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halamana";
        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $waktuMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam";
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak($produk){
        $str = "{$produk->judul} | {$produk->setLabel()} (Rp. {$produk->harga})";
        return $str;
    } 
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("Spiderman", "Savenda", "Sony", 500000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(10);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul("JudulBaru");
echo $produk1->getPenerbit();
