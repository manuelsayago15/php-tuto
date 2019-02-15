<html>
<head>
<title>Métodos</title>
</head>
<body>
<?php
  class CabeceraPagina {
    private $title;
    private $location;
    private $color;
    private $font;

    public function inicializar($title, $location, $color, $font) {
      $this->title = $title;
      $this->location = $location;
      $this->color = $color;
      $this->font = $font;
    }

    public function show() {
      echo '<p style="font-size:' . $this->font .'px; text-align:' . $this->location .';color:' . $this->color .';">'.$this->title.'</p>';
    }


  }

  $header = new CabeceraPagina();
  $header->inicializar("Medium", "center", "green", "25");
  $header->show();
?>
</body>
</html>