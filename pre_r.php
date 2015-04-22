<?php
function pre_r(){
	if ( defined('PRE_R') && PRE_R !== true ){
		return;
	}
	foreach (func_get_args() as $arg) {
		echo '<pre style="display:block">';
		print_r($arg);
		echo '</pre>';
	}
}