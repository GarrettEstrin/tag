<?php 

  require_once("./config.php");
  if(!doesTableExist($link)){
    mysqli_query($link, "CREATE TABLE tag (
      name VARCHAR(30) NOT NULL PRIMARY KEY,
      it BOOLEAN
      )");
      echo "Tag Table Sucessfully Created";
  }

  $names = getNames($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TAG! Administration</title>

  <style>
    .container {
      width: 1000px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="./tagPlayer.php" method="POST">
      <h1>Who's it?</h1>
      <ul>
        <?php if(count($names) == 0){
          echo "No players added";
        } ?>
        <?php for($i = 0;$i<count($names);$i++){?>
          <li><input type="radio" value="<?php echo $names[$i]["name"] ?>" name="current" id="<?php echo $names[$i]["name"] ?>"<?php if($names[$i]["it"] == 1){echo " checked";}?>><label for="<?php echo $names[$i]["name"] ?>"><?php echo $names[$i]["name"] ?></label><input type="checkbox" value="<?php echo $names[$i]["name"] ?>" name="delete<?php echo $i ?>" id="delete-<?php echo $names[$i]["name"]?>"><label for="delete-<?php echo $names[$i]["name"]?>">Delete Player</label></li>
        <?php } ?>
        <?php if(count($names) != 0){ ?>
          <li><input type="submit"></li>
        <?php } ?>
      </ul>
    </form>

    <form action="./addPlayer.php" method="POST">
      <h2>Add a new player</h2>
      <ul>
      <li><input type="text" name="newPlayer" id="newPlayer"><label for="newPlayer">New Player's Name</label></li>
      </ul>
      <input type="submit">
    </form>
  </div>
</body>
</html>