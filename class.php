<?php

/* Generic class Tax */
class Tax {
	public $name = '';
	public $value = 0;

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

	public function getTaxValue ($invoiceValue) {
		$taxValue = ( $invoiceValue * (number_format($this->value, 2)) / 100 );
		return $taxValue;
	}

	public function calculate($invoiceValue) {}
}

class Pis extends Tax {
	public $name = 'pis';
	public $minimum = '5000';

	public function setMinimum($minimum) {
		$this->minimum = $minimum;
	}

	public function getMinimum() {
		return $this->minimum;
	}

	public function setValueNonCumulative($valueNonCumulative) {
		$this->valueNonCumulative = $valueNonCumulative;
	}

	public function getValueNonCumulative() {
		return $this->valueNonCumulative;
	}

	public function calculate($invoiceValue) {
		if ($invoiceValue >= $this->minimum) {
			return $this->getTaxValue($invoiceValue);
		} else {
			return 0;
		}
	}

}

class Cofins extends Tax {
	public $name = 'cofins';
	public $minimum = '5000';

	public function setMinimum($minimum) {
		$this->minimum = $minimum;
	}

	public function getMinimum() {
		return $this->minimum;
	}

	public function setValueNonCumulative($valueNonCumulative) {
		$this->valueNonCumulative = $valueNonCumulative;
	}

	public function getValueNonCumulative() {
		return $this->valueNonCumulative;
	}

	public function calculate($invoiceValue) {

		if ($invoiceValue >= $this->minimum) {
			return $this->getTaxValue($invoiceValue);
		} else {
			return 0;
		}
	}

}

class Csll extends Tax {
	public $name = 'csll';
	public $minimum = '5000';

	public function setMinimum($minimum) {
		$this->minimum = $minimum;
	}

	public function getMinimum() {
		return $this->minimum;
	}

	public function calculate($invoiceValue) {
		return $this->getTaxValue($invoiceValue);
	}

}

class Irpj extends Tax {
	public $name = 'irpj';
	public $minimum = '10';

	public function setMinimum($minimum) {
		$this->minimum = $minimum;
	}

	public function getMinimum() {
		return $this->minimum;
	}

	public function calculate($invoiceValue) {
		$irAmount = $this->getTaxValue($invoiceValue);

		if($irAmount > 10) {
			return $irAmount;
		} else {
			return 0;
		}

	}

}

?>
