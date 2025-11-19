<?php 
$name = 'jan';

if($name === 'jan') echo "The name is: {$name}";
else echo "The name is not {$name}";

//Ternary Operator
$text = $name === 'jan'? "The name is: {$name}" : "The name is not {$name}";
echo($text);
?>