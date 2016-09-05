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
    <form action="?">
      <?php echo $vanused->vorm(); ?>
      <input type="submit" name="salvestus" value="OK">
    </form>
  </body>
</html>
