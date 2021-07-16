<?php

/**
 * db
 * Short debugging function
 * Outputs contents of a variable in readable HTML
 *
 * @author Samuel Kroiß
 * @version 0.1
 * 
 * @param string $var The variable
 * @return void
 */
function db($var) {echo "<pre>"; var_dump($var); echo "</pre>";}

?>