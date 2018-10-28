<?php 
require_once("./config.php");
if(count($_POST) == 1){
  $result = mysqli_query($link, "INSERT INTO `tag` (`name`, `it`) VALUES ('". $_POST["newPlayer"] ."', '0');");
  if($result){
    header('Location: ./FGkRakMZ601gGn.php');
    die();
  }
}