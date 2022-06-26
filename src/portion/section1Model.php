<?php



$connect = DataBase::connect();

$statement = $connect->prepare('SELECT name, image, price FROM section1');
$statement->execute();
$section1 = $statement->fetchAll();

DataBase::disconnect();