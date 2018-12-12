<?php
function getDataBase() {
  try {
    $db = new PDO('mysql:host=localhost;dbname=saveplanet;charset=utf8', 'root', 'root');
  }
  catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  return $db;
}

 ?>
