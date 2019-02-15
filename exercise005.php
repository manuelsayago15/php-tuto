<html>
<head>
<title>Métodos</title>
</head>
<body>
<?php
  class Table {
    private $rows;
    private $columns;
    private $table = array();
    private $fontColor = array();
    private $background = array();
    
    public function __construct($rows, $columns) {
      $this->rows = $rows;
      $this->columns = $columns;
    }

    public function UploadValues($rows, $columns, $value, $fontColor, $background) {
      $this->table[$rows][$columns] = $value;
      $this->fontColor[$rows][$columns] = $fontColor;
      $this->background[$rows][$columns] = $background;
    }

    public function CreateTable() {
      echo '<table border="1px; style="width: 500px";">';
    } 

    public function TableRow() {
      echo '<tr>';
    }

    public function Show($rows, $columns) {
      echo '<td style="background-color: '.$this->background[$rows][$columns].
      '; color: '.$this->fontColor[$rows][$columns]. ';">' . $this->table[$rows][$columns] . '</td>';
    }

    public function EndRow() {
      echo '</tr>';
    }

    public function CloseTable() {
      echo '</table>';
    }

    public function BuildTable() {
      $this->CreateTable();
      for ($i=1; $i <=$this->rows; $i++) { 
        $this->TableRow();
        for ($j=1; $j <=$this->columns; $j++) { 
          $this->Show($i, $j);
        }
        $this->EndRow();
      }
      $this->CloseTable();
    }

  }

  $value = new Table("2", "3");
  $value->UploadValues(1,1,"1", "#0a674f", "#cae6df");
  $value->UploadValues(1,2,"2", "#0a674f", "#cae6df");
  $value->UploadValues(1,3,"3", "#0a674f", "#cae6df");
  $value->UploadValues(2,1,"4", "#0a674f", "  #cae6df");
  $value->UploadValues(2,2,"5", "#0a674f", "  #cae6df");
  $value->UploadValues(2,3,"6", "#0a674f", "  #cae6df");
  $value->BuildTable();



?>
</body>
</html>