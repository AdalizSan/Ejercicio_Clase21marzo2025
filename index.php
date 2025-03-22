<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios PW1 Clase 21/03/2025 </title>
</head>
<body>
    <?php
        echo "---------------------------------------"
        echo "      NUMEROS PRIMOS"
        $numero = 1;
        while ($numero <= 30) {
            $NumPrimo = true;
            $divisor = 2;
            if ($numero == 1) {
                $NumPrimo = false;
            } else {
                while ($divisor <= $numero / 2) {
                    if ($numero % $divisor == 0) {
                        $NumPrimo = false;
                        break;
                    }
                    $divisor++;
                }
            }
            if ($NumPrimo == true) {
                echo $numero . "\n";
            }
            
            $numero++;
        }

        echo "------------------------------------"
        echo "IMPRIMIR ASTERISCOS"
        $numero = 1;
        $asteris = "*";

        while ($numero < 5) {
            echo $asteris . "\n"; 
            $asteris = $asteris ."*"; 
            $numero++;

            if ($numero == 5) {
                echo "+++++" . "\n"; 

                while ($numero > 0) {
                    if ($numero < 5) {
                        $contaAsterisco = 0;
                        while ($contaAsterisco < $numero) {
                            echo "*";
                            $contaAsterisco++;
                        }
                        echo "\n";
                    }
                    $numero--;
                }
                break;
            }
        }
    ?>
</body>
</html>
