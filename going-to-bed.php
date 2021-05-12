<?php
  class StringUtils {
    public static function secondCase($string) {
      $string = strtolower($string);

      if (strlen($string) >= 2) {
        $string[1] = strtoupper($string[1]);
      }
      
      return $string;
    }
  }

  class Pajamas {
    private $owner, $fit, $color;

    function __construct($owner = "unclaimed",
  $fit = "fine",
  $color = "white") {
      $this->owner = StringUtils::secondCase($owner);
      $this->fit = $fit;
      $this->color = $color;
    }

    public function describe() {
      return "$this->owner's $this->color pajamas fit $this->fit.";
    }

    public function setFit($new_fit) {
      $this->fit = $new_fit;
    }
  }

  $chicken_PJs = new Pajamas("CHICKEN", "just right", "purple");

  class ButtonablePajamas extends Pajamas {
    private $button_state = "unbuttoned";

    public function describe() {
      return parent::describe() . " They also have buttons which are currently $this->button_state.";
    }
    public function toggleButtons() {
      if ($this->button_state === "unbuttoned") {
        $this->button_state = "buttoned";
      } 
      else {
        $this->button_state = "unbuttoned";
      }
    }
  }

  $moose_PJs = new ButtonablePajamas("moose", "kind of loose", "red");
  echo "\n";
  $moose_PJs->toggleButtons();
echo "\n";
echo $moose_PJs->describe();
