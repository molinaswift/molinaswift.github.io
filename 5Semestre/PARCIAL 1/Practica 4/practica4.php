<?php
$aciertos = 0;

$respuestas_correctas = [
    "pregunta1" => "Charlie Brown", // Mejor amigo de Snoopy
    "pregunta2" => "Beagle", // Raza de Snoopy
    "pregunta3" => ["Escribir novelas", "Volar su casa como avión"], // Hobbies de Snoopy
    "pregunta4" => "1950", // Año de aparición de Snoopy
    "pregunta5" => "Charles Schulz", // Creador de Snoopy
    "pregunta6" => "Rojo", // Color de la casa de Snoopy
    "pregunta7" => "Piano", // Instrumento que toca Schroeder
    "pregunta8" => "Era una noche oscura y tormentosa", // Frase de Snoopy
    "pregunta9" => "Rojo", // Color del collar de Snoopy
    "pregunta10" => "Charlie Brown" // Dueño de Snoopy
];

for ($i = 1; $i <= 10; $i++) {
    $respuesta = $_POST["pregunta$i"];

    if ($i == 3) {
        $correctas = $respuestas_correctas["pregunta$i"];
        if (count($respuesta) == count($correctas) && count(array_intersect($respuesta, $correctas)) == count($correctas)) {
            $aciertos++;
            echo "<h3>$i. Correcto</h3><img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<h3>$i. Incorrecto</h3><img src='incorrecta.png' width='50px'><hr>";
        }
    } else {
        if (strtolower($respuesta) == strtolower($respuestas_correctas["pregunta$i"])) {
            $aciertos++;
            echo "<h3>$i. Correcto</h3><img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<h3>$i. Incorrecto</h3><img src='incorrecta.png' width='50px'><hr>";
        }
    }
}

echo "<h2>CALIFICACIÓN FINAL = " . ($aciertos * 10) . "%</h2>";
