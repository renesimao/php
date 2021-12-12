<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $l = array();
        $l[0] = new Lutador("Pretty boy","França", 31, 1.75, 68.9, 11, 2, 1);
        $l[1] = new Lutador("Putscript", "Brasil", 28, 1.87, 90, 14, 3, 5);
        $l[2] = new Lutador("Snapshadow", "Irlanda", 32, 1.77, 84, 10, 2, 1);
        $l[3] = new Lutador("Deadcode", "Alemanha",26, 1.69, 66, 8 , 2 , 1);
        $l[4] = new Lutador("Ufocobol", "Australia", 30, 1.95, 101, 15, 1, 4);
        $l[5] = new Lutador("Nerdchaart", "Russia", 25, 1.72, 80, 11, 2, 2);
        
        $Uec01 = new Luta();
        $Uec01->marcarluta($l[1],$l[2]);
        $Uec01->lutar();
       
        ?>
    </body>
</html>
