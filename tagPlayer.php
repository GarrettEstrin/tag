<?php 
require_once("./config.php");
if(count($_POST) == 1){
  mysqli_query($link, "UPDATE `tag` SET `it`=0");
  $result = mysqli_query($link, "UPDATE `tag` SET `it` = '1' WHERE `tag`.`name` = '" . $_POST["current"] . "';");
  if($result){
    header('Location: ./FGkRakMZ601gGn.php');
    die();
  }
}