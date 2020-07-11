<?php

namespace rkadam01\Addition;
/**
 * 
 */
class Addition
{
	public function getAddition() {
		$firstElement = array_shift($argv);
		if( false == ctype_digit(implode('',$argv))){
			return 'Please enter the valid parameters.';
		} else {
			return array_sum($argv);
		}
	}
}
?>