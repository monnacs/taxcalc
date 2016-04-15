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

	public function calculate($invoiceValue) {}
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

	public function calculate($invoiceValue) {

		if ($invoiceValue >= $this->minimum) {
			return getTaxValue($invoiceValue, $this->value);
		} else {
			return 0;
		}
	}

}

class Cofins extends Tax {
	private $name = 'cofins';
	private $minimum = '5000';

	public function setMinimum($minimum) {
		$this->minimum = $minimum;
	}

	public function getMinimum() {
		return $this->minimum;
	}

	public function calculate($invoiceValue) {

		if ($invoiceValue >= $this->minimum) {
			return getTaxValue($invoiceValue, $this->value);
		} else {
			return 0;
		}
	}

}

class Csll extends Tax {
	private $name = 'csll';
	private $minimum = '5000';

	public function setMinimum($minimum) {
		$this->minimum = $minimum;
	}

	public function getMinimum() {
		return $this->minimum;
	}

	public function calculate($invoiceValue) {
		return getTaxValue($invoiceValue, $this->value);
	}

}

class Irpj extends Tax {
	private $name = 'irpj';
	private $minimum = '10';

	public function setMinimum($minimum) {
		$this->minimum = $minimum;
	}

	public function getMinimum() {
		return $this->minimum;
	}

	public function calculate($invoiceValue) {
		$irAmount = getTaxValue($invoiceValue, $this->value);

		if($irAmount > 10) {
			return $irAmount;
		} else {
			return 0;
		}

	}


}


?>
