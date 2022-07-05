
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './campos.php';
        require './pessoa.php';
        $objeto = new pessoa();
        $campos = new campos($objeto)
        ?>
    </body>
</html>
