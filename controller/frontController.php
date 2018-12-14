<?php


function firstpage(){
  require "model/userManager.php";
  $userConnects = getUser();


if (!empty($_POST)){

  foreach ($userConnects as $key =>$userConnect){
    if ($_POST["pseudo"] === $userConnect["pseudo"]  && $_POST["password"] === $userConnect["password"]){
      initializeUserSession($userConnect);
    }
}
if (isLogged()) {
  redirectTo("home");
}
exit;
  }
require "view/indexView.php";
}





// logout controller

function logoutUser(){
  require "model/userManager.php";
  session_start();
  if (isLogged()) {
    logout();
    redirectTo("");
  }
  else {
    redirectTo("");
  }
}


// page home
function showUser() {
  require "model/userManager.php";
  if (!empty($_POST)){
    $user = sortBy($_POST);
  }
  else {
    $user = getUser();
  }

  require "view/homeView.php";
}

// page single
function showsingle(){

  require "model/userManager.php";

  $id = (int) $_GET["id"];
  $user = getOneUser($id);
var_dump($_SESSION);
  require "view/singleView.php";
}

// page add user
function showAddUser(){

  require "model/userManager.php";

  if(!empty($_POST)){

    if(addUser($_POST )){
      header("Location: home");
      exit;
    }
  }
  require "view/addUserView.php";
}

// page delete
function eraser(){
  require "model/userManager.php";

  if(isset($_GET["id"])) {
    //We get id of the user to delete
    $id = intval(htmlspecialchars($_GET["id"]));

    //we call the delete function
    if(deleteUser($id)) {
      header("Location: home");
      exit;
    }
    header("Location: home.php?error=Une erreur est survenue.");
      exit;
  }
}

// page update
function showUpdate(){
  require "model/userManager.php";


  $id = (int) htmlspecialchars($_GET["id"]);
  $user = getoneUser($id);

  if(!empty($_POST)) {
    //We call the function for update
    if(updateUser($_POST)) {
      header("Location: home");
      exit;
    }
  }
  require "view/updateUserView.php";
}


 ?>
