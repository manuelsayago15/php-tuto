<html>
<head>
<title>Métodos</title>
</head>
<body>
<?php
  class CabeceraPagina {
    private $title;
    private $position;
    private $backgroundColor;
    private $fontColor;

    public function __construct($title, $position, $backgroundColor, $fontColor) {
      $this->title = $title;
      $this->position = $position;
      $this->backgroundColor = $backgroundColor;
      $this->fontColor = $fontColor;
    }

    public function show() {
      echo '<div style="font-color: '.$this->fontColor.'; background-color: '.$this->backgroundColor.'; text-align: '.$this->position.'">';
      echo $this->title;
      echo '</div>';
    }

  }

  $header = new CabeceraPagina("Dev.to", "right", "dark-blue", "brown");
  $header->show();
?>
</body>
</html>