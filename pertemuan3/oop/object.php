<?php

# membuat class Person
class Person
{
  # membuat property (variable)
  public $nama;
  public $alamat;
  public $jurusan;
}

# membuat object faris dari class Person
$faris = new Person();
# mengakses property nama
echo $faris->nama;
# memberikan nilai baru ke property nama
$faris->nama = "Faris Ar Rasyid";
echo "$faris->nama <br>";

# membuat object yanto dari class Person
$yanto = new Person();
echo $yanto->nama;
$yanto->nama = "Yanto";
echo "$yanto->nama <br>";
