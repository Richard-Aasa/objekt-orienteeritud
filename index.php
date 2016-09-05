<?php
  class Hoidla {
    private $arvud = array();
    public function lisa($arv) {
      array_push($this->arvud, $arv);
    }
    public function kogus() {
      return count($this->arvud);
    }
  }
  $vanused = new Hoidla();
  $vanused->lisa(25);
  $vanused->lisa(15);
  $vanused->lisa(30);
  $vanused->lisa(40);
  echo $vanused->kogus();
?>
