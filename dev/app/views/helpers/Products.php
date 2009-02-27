<?php
function currency_format($amount, $precision = 2, $currency_symbol = "$") {
	/*
	** An improvement to number_format.  Mainly to get rid of the annoying behaviour of negative zero amounts.
	*/
	$amount = (float) $amount;
	// Get rid of negative zero
	$zero = round(0, $precision);
	if (round($amount, $precision) == $zero)
		$amount = $zero;

	if (($amount < 0))
		$amount = number_format(abs($amount), $precision);
	else
		$amount = number_format($amount, $precision);

	$amount = '$'.$amount;

	return $amount;
}

class ProductsHelper extends AppHelper {
	var $name = 'Product';

	function buildProductOptionValues($optionValues) {
		$arr = array();
		foreach($optionValues as $optionValue) {
			$arr[$optionValue['id']] = $optionValue['value'].', ';
			if($optionValue['price'] < 0)
				$arr[$optionValue['id']] .= '-';
			else
				$arr[$optionValue['id']] .= '+';
			$arr[$optionValue['id']] .= currency_format($optionValue['price']);
		}
		return $arr;
	}
}
?>
