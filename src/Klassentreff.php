<?php


class Klassentreff{
	private $klassenname;
	function neueKlasse($name){
		$this->klassenname = $name;
	}

	
	function halloKlasse(){
		echo "Hallo Klasse ".$this->klassenname;
	}

}