<!-- function to get all user in the database saveplanet -->
<?php
function getUser(){
$db = getDataBase();
$query = $db->query("SELECT * FROM user");
$result = $query->fetchall(PDO::FETCH_ASSOC);
$query->closeCursor();
return $result;
}

//Fonction qui récupère un seul produit de la DB sur la base de son id
function getOneUser($id) {
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM user WHERE id=?");
  $query->execute([$id]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  return $user;
}
// function to add a user
function addUser($user)
{
  $db = getDataBase();
  $query = $db->prepare('INSERT INTO user(last_name, first_name, age, comment, availability, street, city, pseudo, password) VALUES(:last_name, :first_name, :age, :comment, :availability, :street, :city, :pseudo, :password)');
  $result = $query->execute(array(
      "last_name" => $user["last_name"],
      "first_name" => $user["first_name"],
      "age" => $user["age"],
      "comment" => $user["comment"],
      "availability" => $user["availability"],
      "street" => $user["street"],
      "city" => $user["city"],
      "pseudo" => $user["pseudo"],
      "password" => $user["password"]));

  $query->closeCursor();
  return $result;
}

// function to delete a user in database

function deleteUser($id) {
  $db = getDataBase();
  $query = $db->prepare("DELETE FROM user WHERE id = ?");
  $result = $query->execute([$id]);
  return $result;
}

//Fonction pour modifier les valeurs d'un produit en base de données
function updateUser($user) {
  $db = getDataBase();
  $query = $db->prepare("UPDATE user SET id = :id, last_name = :last_name, first_name = :first_name, age = :age, comment = :comment, availability = :availability, street = :street, city = :city WHERE id = :id");
  $result = $query->execute([
    "id" => $user["id"],
    "last_name" => $user["last_name"] ,
    "first_name" => $user["first_name"],
    "age" => $user["age"],
    "comment" => $user["comment"],
    "availability" => $user["availability"],
    "street" => $user["street"],
    "city" => $user["city"]
  ]);
  return $result;
}


 ?>


 <!-- function sort by  -->

<!-- by name -->
 <?php
 function sortUserbyName($db){

 $query = $db->query("SELECT * FROM user ORDER BY Last_name ASC");
 $result = $query->fetchall(PDO::FETCH_ASSOC);
 $query->closeCursor();
 return $result;
 }

// by age

function sortUserbyAge($db){

$query = $db->query("SELECT * FROM user ORDER BY age ASC");
$result = $query->fetchall(PDO::FETCH_ASSOC);
$query->closeCursor();
return $result;
}




//°°°°°°°°°°°°°° test function



function sortBy($form){
$db = getDataBase();
$sql = "SELECT * FROM user ";

if (!empty($form["order"])) {
  $sql .= "ORDER BY " . $form["order"];
}
// return $sql;
$query = $db->query($sql);
$result = $query->fetchall(PDO::FETCH_ASSOC);
$query->closeCursor();
return $result;
}
?>
