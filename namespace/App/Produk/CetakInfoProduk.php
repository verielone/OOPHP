<?php

class CetakInfoProduk {
    public $dataProduk = [];

    public function tambahProduk( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduk as $p ) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    } 

    public function lala() {
        return var_dump($this->daftarProduk);
    }
}