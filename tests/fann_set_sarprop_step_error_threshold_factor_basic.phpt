--TEST--
Test function fann_set_sarprop_step_error_threshold_factor() by calling it with its expected arguments
--FILE--
<?php

$ann = fann_create_standard( 3, 3, 2, 1 );

var_dump( fann_set_sarprop_step_error_threshold_factor( $ann, 0.2 ) );
var_dump( round( fann_get_sarprop_step_error_threshold_factor( $ann ), 2 ) == round( 0.2, 2 ) );

?>
--EXPECT--
bool(true)
bool(true)