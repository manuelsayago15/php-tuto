<html>
<head>
<title>Métodos</title>
</head>
<body>
<?php
  class Menu {
    private $link = array();
    private $title = array();
    
    public function Upload($link, $title) {
      $this->link[] = $link;
      $this->title[] = $title;
    }

    private function MenuHorizontal() {
      for ($i=0; $i < count($this->link); $i++) { 
        echo '<a href="'.$this->link[$i]  .'">' . $this->title[$i] . ' ' .'</a>';
        echo '-';
      }
    }

    private function MenuVertical() {
      for ($i=0; $i < count($this->link); $i++) { 
        echo '<a href="'.$this->link[$i]  .'">' . $this->title[$i] . ' ' .'</a>';
        echo '<br>';
      }
    }

    public function Show($orientation) {
      if (strtolower($orientation) == "horizontal") {
        $this->MenuHorizontal();
      } else if (strtolower($orientation) == "vertical") {
        $this->MenuVertical();
      }
    }
  }

  $menu1 = new Menu(); 
  $menu1->Upload('http://www.lanacion.com.ar','La Nación');
  $menu1->Upload('http://www.clarin.com.ar','El Clarín');
  $menu1->Upload('http://www.lavoz.com.ar','La Voz del Interior');
  $menu1->Show("Horizontal");


?>
</body>
</html>