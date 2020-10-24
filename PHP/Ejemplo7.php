<?php
	class Calculadora{
		/*Atributos(caracteristicas) y Métodos(funcionalidades) */
		//Atributos
		private $valor1;
		private $valor2;

		//metodos de acceso para poder interactuar con estos atributos
		public function setValor1($v1){
			$this->valor1=$v1;
		}
		public function getValor1(){
			return $this->valor1;
		}
		public function setValor2($v2){
			$this->valor2=$v2;
		} 
		public function getValor2(){
			return $this->valor2;
		}
		public function sumar(){
			return $this->valor1 + $this->valor2;
		}
		public function restar(){
			return $this->valor1 - $this->valor2;
		}
	} 

	//instanciar la clase Calculadora (creación de un objeto Calculadora)
	$objeto = new Calculadora;
	//Asignaron valores por medio de los metodos Set
	$objeto->setValor1($_GET['txtValor1']);
	$objeto->setValor2($_GET['txtValor2']);
	
	if (isset($_GET['btnSuma'])) {
		echo "Valor 1: ", $objeto->getValor1() , ", Valor 2: ". $objeto->getValor2();
		echo "<br>La suma es: ", $objeto->sumar();	
	}
	if (isset($_GET['btnResta'])) {
		echo "Valor 1: ", $objeto->getValor1() , ", Valor 2: ". $objeto->getValor2();
		echo "<br>La resta es: ", $objeto->restar();	
	}
	

?>