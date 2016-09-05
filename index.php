<?php
  require("hoidla.php");
  $vanused = new Hoidla();
  $vanused->lisa(25);
  $vanused->lisa(15);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>
    <?php echo $vanused->kogus(); ?>
  </body>
</html>
