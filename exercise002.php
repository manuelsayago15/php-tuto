<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
  class Menu {
    private $link = array();
    private $title = array();

    public function Horizontal($link, $title) {
      $this->link[] = $link;
      $this->title[] = $title;
    }

    public function Vertical($link, $title) {
      $this->link[] = $link;
      $this->title[] = $title;
    }

    public function Show() {
      for ($i=0; $i <count($this->link) ; $i++) { 
        echo '<a href="' . $this->link[$i] . '">' . $this->title[$i] . '</a>' . ' ';
      }
    }
  }

  $menu1 = new Menu();
  $menu1->Horizontal("http://www.tutorialesprogramacionya.com/", "Tutoriales de Programación");
  $menu1->Horizontal("www.google.cl", "Google Chile");
  $menu1->Horizontal("www.getonbr.cl", "Get On Board");

  
  $menu1->Show();

?>
</body>
</html>