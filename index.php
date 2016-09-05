<?php
  require 'hoidla.php';
  $vanused = new Hoidla();
  $vanused->lisa(25);
  $vanused->lisa(15);
  echo $vanused->kogus();
?>
