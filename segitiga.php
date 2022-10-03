<?php 
require_once "bentuk2d.php";

class Segitiga extends Bentuk2D{
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namabidang()
    {
        $nama = "Segitiga";
        return $nama;
    }
    public function kelilingbidang()
    {
        $keliling = 3*$this->alas;
        return $keliling;
    }
    public function luasbidang()
    {
        $luas = 0.5 * $this->alas*$this->tinggi;
        return $luas;
    }
    public function keterangan(){
        return "
        Alas : ".$this->alas."<br>
        Tinggi : ".$this->tinggi."<br>
        ";
    }
}
