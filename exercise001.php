<?php

class Empleado {
	private $name;
	private $salary;

	public function inicializar($name, $salary) {
		$this->name = $name;
		$this->salary = $salary;
	}

	public function print(){
		echo $this->name . ' ' . "y su salario es de" . ' ' . '$ ' . $this->salary . '<br>';
	}
}

$empleado1 = new Empleado();
$empleado1->inicializar("Manuel", "1200000");
$empleado1->print();

$empleado2 = new Empleado();
$empleado2->inicializar("Luisana", "1200000");
$empleado2->print();

?>