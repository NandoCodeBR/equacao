        <?php
        $x = $_GET['equacao'];
        $n1 = $_GET['valor1'];
        $n2 = $_GET['valor2'];
        switch ($x) {
            case "Dobro":
                echo "O dobro de $n1 é:". $n1*2;
                break;
            case "Cubo":
                echo "O cubo de $n1 é:". $n1*$n1*$n1;
                break;
            default:
                echo "A raiz quadrada de $n1 é:".$n1*$n1;
        }
        ?>

