<?php

namespace rkadam01\Addition;
/**
 *
 */
class Addition
{
	public function getAddition( $data ) {
		$firstElement = array_shift($data);
		if( false == ctype_digit(implode('',$data))){
			return 'Please enter the space seprated numbers.';
		} else {
			return 'The addition of numbers is: ' . array_sum($data);
		}
	}
}
?>