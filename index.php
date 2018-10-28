<?php 
  require_once("./config.php");
  $names = getNames($link);
  for($i = 0;$i<count($names);$i++){
    if($names[$i][1] == 1){
      $it = $names[$i][0];
    }
  }
  date_default_timezone_set('America/Los_Angeles');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TAG!</title>

  <style>
    body {
      padding: 0;
      margin: 0;
      font-family: Helvetica;
    }
    .container {
      margin: 0 auto;
      width: 80%;
      max-width: 1200px;
      display: flex;
      align-items: center;
      height: 100vh;
    }
    .text-container {
      width: 100%;
    }
    .name, .isIt {
      width: 100%;
      text-align: center;
      font-size: 150px;
      margin: 0;
    }
    .updated {
      text-align: right;
    }
    
  </style>
</head>
<body>
  <div class="container">
    <div class="text-container">
      <h1 class="name"><?php echo $it ?></h1>
      <h2 class="isIt">is it!</h2>
      <h6 class="updated">Last Updated <?php echo date('m/d/Y h:i:s a', time()); ?></h6>
    </div>
  </div>
  <script>
    setTimeout(() => {
      location.reload();
    }, 30000);
  </script>
</body>
</html>