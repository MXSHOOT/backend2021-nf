<?php

# membuat class Person
class Person
{
  # membuat property (variable)
  public $nama;
  public $alamat;
  public $jurusan;
}

# membuat object aufa dari class Person
$faris = new Person();
# mengakses property nama
echo $faris->nama;
# memberikan nilai baru ke property nama
$faris->nama = "Aufa Billah";
echo "$faris->nama <br>";

# membuat object ismail dari class Person
$ismail = new Person();
echo $ismail->nama;
$ismail->nama = "Ismail Yusuf";
echo "$ismail->nama <br>";
