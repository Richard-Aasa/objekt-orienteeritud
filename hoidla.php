<?php
  class Hoidla {
    private $arvud = array();
    public function lisa($arv) {
      array_push($this->arvud, $arv);
    }
    public function kogus() {
      return count($this->arvud);
    }
    public function vorm() {
        $t="";
        foreach ($this as $arv) {
          $t.="<input type='number' name='a[]' value='$arv' />"
        }
        $t.="<input type='number' name='a[]' />"
        return $t;
    }
    public function loeVormist() {
      $this->arvud=array();
      foreach($_REQUEST["a"] as $arv){
        if($arv) {
          $this->lisa($arv);
        }
      }
    }

  }
?>
