<?php

$db = new PDO('mysql:host=db;dbname=collectorapp','root','password');
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT `name`,`year`,`director`,`genre` FROM `movies`");
$query->execute();
$data = $querry->fetchAll();

echo "<pre>";
var_dump($data);
echo "</pre>";

