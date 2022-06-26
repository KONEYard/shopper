<?php

$connect = DataBase::connect();

$statement = $connect->prepare('SELECT name, image, price FROM section2');
$statement->execute();
$section2 = $statement->fetchAll();

DataBase::disconnect();