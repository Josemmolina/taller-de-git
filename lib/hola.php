<?php
// Autor: Jose Maria Molina <jmolrod845@g.educaand.es>

require('HolaMundo.php');

print "Introduce tu nombre: ";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);;

?>
