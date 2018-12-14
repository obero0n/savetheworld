<?php
function showMessage(){
  require "model/messagerManager.php";

  $messages =  getMessages($_SESSION["user"]["id"]);

if (!empty($_POST)) {
  $getter = test($_POST["pseudo"]);
  $_POST["pseudo"] = $getter["id"];


  $sendMessage = addMessages($_POST,$_SESSION["user"]["id"]);
  if ($sendMessage) {
    echo "ok";
  }

  $test = test($_POST["pseudo"]);

  var_dump($getter);

}
    require "view/messageView.php";
}
?>
