<?php 
  function getNames(){
    return ["Garrett, Mark"];
  }

  $names = getNames();
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
    <h1>Who's it?</h1>
    <ul>
      <li><input type="radio" value="Garrett" name="current" id="Garrett"><label for="Garrett">Garrett</label></li>
      <li><input type="submit"></li>
    </ul>
  </div>
</body>
</html>