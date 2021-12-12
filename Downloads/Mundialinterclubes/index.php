<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Time.php';
        require_once 'Jogo.php';
        $t = array();
        $t[0] = new Time ("Flamengo", "Brasil", 8, 1, 1);
        $t[1] = new Time("Liverpool", "Inglaterra", 6 , 3 , 2);
        $t[2] = new Time("Milan", "Italia", 4, 2, 2);
        $t[3] = new Time("River Plate", "Argentina", 5, 2, 4);
        $t[4] = new Time("Sao paulo", "Brasil", 2, 2, 2);
        $t[5] = new Time("Corinthians", "Brasil", 4, 2, 0);
        $t[6] = new Time("Real madrid", "Espanha", 7, 4, 3);
        $t[7] = New Time("Bayern de munique", "Alemanha", 5, 2, 0);
        $t[8] = New Time("Gremio", "Brasil", 4, 4, 0);
        $t[9] = new Time("Ajax", "Holanda", 8, 5, 4);
        $Mu = new Jogo();
        $Mu->marcarjogo($t[7],$t[0]);
        $Mu->jogar();
        ?>
    </body>
</html>
