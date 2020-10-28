<?php

try{
    $db =  new PDO("mysql:host=localhost;dbname=latihan","root","",[PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION]);
} catch (Exception $error){
    echo $error->getMessage();
}
$siswa=$db->query("select * from hotel");
$data_siswa=$siswa->fetchAll();

// var_dump($data_siswa);
// exit;
?>