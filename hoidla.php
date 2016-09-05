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
?>
