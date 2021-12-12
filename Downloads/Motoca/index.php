<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Motoca.php';
        $mt1 = new Motoca("Apache","Dafra","Vermelha");
        print "Eu tenho uma moto {$mt1->getModelo()} da marca {$mt1->getMarca()} da cor {$mt1->getcor()}";
        ?>
        </pre>
    </body>
</html>
