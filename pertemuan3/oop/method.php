<?php

# membuat class Person
class Person
{
  # membuat property (variable)
  public $nama;
  public $alamat;
  public $jurusan;

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

# membuat object Faris dari class Person
$faris = new Person();
$faris->setNama("Faris Ar Rasyid");
echo $faris->getNama() . "<br>";
$faris->setAlamat(("Jakarta"));
echo $faris->getAlamat() . "<br>";
$faris->setJurusan("Teknik Informatika");
echo $faris->getJurusan() . "<br>";

# membuat object yanto dari class Person
$yanto = new Person();
$yanto->setNama("Yanto");
echo $yanto->getNama() . "<br>";
$yanto->setAlamat("Depok");
echo $yanto->getAlamat() . "<br>";
$yanto->setJurusan("Sistem Informasi");
echo $yanto->getJurusan() . "<br>";
