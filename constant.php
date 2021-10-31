<?php

// Constanta hampir sama dengan variabel hanya saja nilai nya 
// tidak dapat diubah. define tidak dapat digunakan didalam 
// class, sedangkan const bisa. 
// define('NAMA', 'Savenda');
// echo NAMA;
// echo "<br>";

// const UMUR = 21;
// echo UMUR;

// class Coba {
//     const NAMA = 'Savenda';
// }
// echo Coba::NAMA;

// Magic Constant
// __LINE__ = untuk mengetahui dibaris berapa magic constant LINE ditulis.
// __FILE__ = untuk mengatahui alamat file yang besangkutan
// __DIR__ =  untuk mengetahui direktori dari file yang bersangkutan
// __FUNCTION__ = untuk mengetahui kita ada di function apa
// __CLASS__ = untuk mengetahui kita ada di class apa

echo __LINE__;
echo __FILE__;
echo __DIR__;

function coba() {
    return __FUNCTION__;
}
echo coba();

class Coba {
    public $coba = __CLASS__;
}

$obj = new Coba;
echo $obj->coba;