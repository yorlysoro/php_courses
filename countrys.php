<?php

$climas = array(
    "Bogota" => "Frio",
    "Monteria" => "Calor",
    "Medellin" => "Templado",
);

$ubicacion = array(
    "Guajira" => "Norte",
    "Leticia" => "Sur",
    "Santander" => "Este",
    "Antioquia" => "Oeste",
);

$turismo = array(
    "Santa Marta" => "Mar",
    "Villavicencio" => "Llanos",
    "Riohacha" => "Desierto",
    "Quindio" => "Valle",
);

echo "Climas\n";

echo array_search("Frio", $climas) . "\n";

echo "Ubicacion\n";

echo array_search("Norte", $ubicacion) . "\n";

echo "Turismo\n";

echo array_search("Mar", $turismo) . "\n";

?> 
