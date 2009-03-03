<?php
class ProductsHelper extends AppHelper {
	var $name = 'Products';

	function __currencyFormat($amount, $showSign = false, $precision = 2) {
		if ($amount < 0) {
			$amount = Configure::read('currency_symbol') . number_format(abs($amount), $precision);
			if($showSign)
				$amount = '-'.$amount;
		}
		else {
			$amount = Configure::read('currency_symbol') . number_format($amount, $precision);
			if($showSign)
				$amount = '+'.$amount;
		}
		return $amount;
	}
	
	function buildProductOptionValues($optionValues) {
		$arr = array();
		foreach($optionValues as $optionValue) {
			$arr[$optionValue['id']] = $optionValue['value'].', ';
			$arr[$optionValue['id']] .= $this->__currencyFormat($optionValue['price'], true);
		}
		return $arr;
	}

	function currencyFormat($amount, $showsign = false, $precision = 2) {
		return $this->__currencyFormat($amount, $showsign, $precision);
	}
}
?>
