<?php

// function getMessage(){
//   $db = getDataBase();
//   $query = $db->query("SELECT * FROM message");
//   $result = $query->fetchall(PDO::FETCH_ASSOC);
//   $query->closeCursor();
//   return $result;
// }

function getMessages($id){
  $db = getDataBase();
  $query = $db->prepare("SELECT m.*  FROM message AS m INNER JOIN user AS u ON m.sender = u.id");
  $query->execute([$id]);
  $message = $query->fetchall(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $message;
}


function addMessages($message,$id){
  $db = getDataBase();
  $query = $db->prepare("INSERT INTO message (object, content,  sender, getter) VALUES(:object, :content, :sender, :getter) ");
  $result = $query->execute([
    "object" => $message["object"],
    "content" => $message["content"],
    "sender" => $id,
    "getter" => $message["pseudo"]]);

    $query->closeCursor();
    return $result;
}

// function getUserByPseudo($form){
//   $db = getDataBase();
//   $query = $db->prepare("SELECT u.* FROM user AS u INNER JOIN message AS m ON u.id = m.getter WHERE u.pseudo=?");
//   $message = $query->execute([$form]);
//   $message = $query->fetch(PDO::FETCH_ASSOC);
//
//   $query->closeCursor();
//   return $message;
// }

function test($form){

$db = getDataBase();

$query = $db->prepare("SELECT id FROM user WHERE pseudo=?");
$message = $query->execute([$form]);
$message = $query->fetch(PDO::FETCH_ASSOC);

$query->closeCursor();
return $message;

}
 ?>
