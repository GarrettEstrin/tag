<?php 
require_once("./config.php");
  mysqli_query($link, "UPDATE `tag` SET `it`=0");
  $result = mysqli_query($link, "UPDATE `tag` SET `it` = '1' WHERE `tag`.`name` = '" . $_POST["current"] . "';");

  for($i = 0;$i<count($_POST);$i++){
    if(array_key_exists("delete" . $i, $_POST)){
      $result = mysqli_query($link, "DELETE FROM `tag` WHERE `tag`.`name` = '" . $_POST["delete" . $i] . "'");
    }
  }

if($result){
  header('Location: ./FGkRakMZ601gGn.php');
  die();
}