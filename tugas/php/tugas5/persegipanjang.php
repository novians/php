<?php
require_once "bentuk2d.php";

class Persegipanjang extends Bentuk2D
{
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namabidang()
    {
        $nama = "persegi panjang";
        return $nama;
    }
    public function kelilingbidang()
    {
        $keliling = (2 * $this->panjang) + (2 * $this->lebar);
        return $keliling;
    }
    public function luasbidang()
    {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    public function keterangan()
    {
        return "
        Panjang : " . $this->panjang . "<br>
        Lebar : " . $this->lebar . "<br>
        ";
    }
}
