<?php

/* função genérica Taxa */
class Tax {
	private $name = '';
	protected  $value = '';

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function setValue($value) {
		$this->value = $value;
	}

	public function getValue() {
		return $this->value;
	}

	public function calculate($nfvalue) {}
}

class Pis extends Tax {
	private $name = 'pis';
	private $minimum = '5000';

	public function setMinimum($minimum) {
		$this->minimum = $minimum;
	}

	public function getMinimum() {
		return $this->minimum;
	}

	public function calculate($nfValue) {

		if ($nfValue >= $this->minimum) {
			return getTaxValue($nfValue, $this->value);
		} else {
			return $nfValue;
		}
	}

}

?>
