<?php

# membuat class Person
class Person
{
  # membuat property (variable)
  public $nama;
  public $alamat;
  public $jurusan;

  # method constructor
  public function __construct($nama, $alamat, $jurusan)
  {
    $this->nama = $nama;
    $this->alamat = $alamat;
    $this->jurusan = $jurusan;
  }

  # membuat method
  public function setNama($data)
  {
    $this->nama = $data;
  }
  public function getNama()
  {
    return $this->nama;
  }
  public function setAlamat($data)
  {
    $this->alamat = $data;
  }
  public function getAlamat()
  {
    return $this->alamat;
  }
  public function setJurusan($data)
  {
    $this->jurusan = $data;
  }
  public function getJurusan()
  {
    return $this->jurusan;
  }
}

# membuat object faris dari class Person
$faris = new Person("Faris Ar Rasyid", "Jakarta", "Teknik Informatika");
echo $faris->getNama() . "<br>";
echo $faris->getAlamat() . "<br>";
echo $faris->getJurusan() . "<br>";

# membuat object yanto dari class Person
$yanto = new Person("Yanto", "Depok", "Sistem Informasi");
echo $yanto->getNama() . "<br>";
echo $yanto->getAlamat() . "<br>";
echo $yanto->getJurusan() . "<br>";
