<?php
$json_data=file_get_contents("mahasiswa.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "Alamat : "; echo $obj->alamat;
echo "<br>";
echo "No Hp : "; echo $obj->nohp;
echo "<br>";
echo "Mata Kuliah 1: ";echo $obj->mk[0];
echo "<br>";
echo "Mata Kuliah 2: ";echo $obj->mk[1];
echo "<br>";
echo "Mata Kuliah 3: ";echo $obj->mk[2];
?>