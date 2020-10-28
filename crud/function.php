<?php

// Function Input

function inputData($input=['']) {
    require 'connection.php';
    $sql = 'INSERT INTO hotel(nama,tanggal,lama) VALUES(?,?,?)';

    $result=$db->prepare($sql);
    $result->bindValue(1, $input['nama'], PDO::PARAM_STR);
    $result->bindValue(2, $input['tanggal'], PDO::PARAM_STR);
    $result->bindValue(3, $input['lama'], PDO::PARAM_STR);
    $result->execute();
}

// Function Delete

function deleteHotel($delete) {
    include 'connection.php';

    $sql = 'DELETE FROM hotel WHERE id = ?';

    try {
        $result = $db->prepare($sql);
        $result->bindValue(1, $delete['id'], PDO::PARAM_INT);
        $result->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;
}

// Function Edit

function editData($editData,$id) {
    include 'connection.php';

    $sql = "UPDATE hotel SET lama= ? WHERE id= ?";

    $result = $db ->prepare($sql);
    $result->bindValue(1, $editData, PDO::PARAM_STR);
    $result->bindValue(2, $id, PDO::PARAM_INT);
    $result->execute();
}

// Function Search

function comand($query)
{
    include 'connection.php';

    global $db;
    $result = $db->query($query);
    $rows=[];
    while($row=$result->fetch(PDO::FETCH_ASSOC)) {
        $rows[]=$row;
    }
    return $rows;
}

// Function Search #2

function searching($keyword) {
    $query = "SELECT * FROM hotel WHERE nama LIKE'%$keyword%' OR tanggal LIKE '%$keyword%' OR lama LIKE '%$keyword%' ";
    return comand($query);
}