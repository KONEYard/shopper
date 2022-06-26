<?php



$connect = DataBase::connect();

$statement = $connect->prepare('SELECT name, image FROM section2');
$statement->execute();
$section1 = $statement->fetchAll();

DataBase::disconnect();