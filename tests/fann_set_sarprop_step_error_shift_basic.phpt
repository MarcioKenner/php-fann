--TEST--
Test function fann_set_sarprop_step_error_shift() by calling it with its expected arguments
--FILE--
<?php

$ann = fann_create_standard( 3, 3, 2, 1 );

var_dump( fann_set_sarprop_step_error_shift( $ann, 1.4 ) );
var_dump( round( fann_get_sarprop_step_error_shift( $ann ), 2 ) == round( 1.4, 2 ) );

?>
--EXPECT--
bool(true)
bool(true)