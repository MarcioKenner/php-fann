--TEST--
Test function fann_get_sarprop_weight_decay_shift() by calling it with its expected arguments
--FILE--
<?php

$ann = fann_create_standard( 3, 3, 2, 1 );

var_dump( fann_get_sarprop_weight_decay_shift( $ann ) );

?>
--EXPECTF--
float(%f)