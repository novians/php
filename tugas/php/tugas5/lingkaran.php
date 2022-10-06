<?php
require_once "bentuk2d.php";

class Lingkaran extends Bentuk2D
{
    public $jari2;
    const PHI = 3.14;

    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }
    public function namabidang()
    {
        $nama = "lingkaran";
        return $nama;
    }
    public function kelilingbidang()
    {
        $keliling = Lingkaran::PHI * 2 * $this->jari2;
        return $keliling;
    }
    public function luasbidang()
    {
        $luas = Lingkaran::PHI * pow($this->jari2, 2);
        return $luas;
    }
    public function keterangan()
    {
        return "
        Jari-Jari : " . $this->jari2 . "<br>
        ";
    }
}
