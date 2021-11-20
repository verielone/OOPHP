<?php

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() {
        $str = "{$this->judul} , {$this->setLabel()} , (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk() {
        $str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halamana";
        return $str;
    }
}