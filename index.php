<?php
  require("hoidla.php");
  $vanused = new Hoidla();
  if(isSet($_REQUEST["savestus"])) {
    $vanused->loeVormist();
  } else {
    $vanused->lisa(25);
    $vanused->lisa(15);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>
    <form class="" action="index.html">
      <?php echo $vanused->vorm(); ?>
    </form>
  </body>
</html>
