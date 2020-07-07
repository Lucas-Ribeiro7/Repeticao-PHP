<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso em Video - WHILE</title>
</head>
<body>
     
    <?php        
        $inicial = $_POST['inicial'];
        $final = $_POST['final'];
        $incre = $_POST['incremento'];

        while ($final >= $inicial){
            echo $inicial . "<br>";
            $inicial = $inicial + $incre;
        }

    ?>

</body>
</html>
    