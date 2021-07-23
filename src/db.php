<?php 

/**
 * Short debugging function
 * Outputs the contents of a variable in readable HTML
 *
 * @author Samuel Kroiß
 * @version 1.2
 * 
 * @param string $variable The variable
 * @param bool $exit = false States if the script should be terminated after the variable is printed
 * @return void
 */
function db($variable, $exit = false) {
    echo "\n\n<pre>"; 
    var_dump($variable); 
    echo "</pre>\n\n"; 

    if($exit) 
        exit;
} 

?>