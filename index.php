<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part4</title>
</head>
<body>
    <p>
        <?php
            function twoStringsInOne($str1, $str2){
                return $str1 . $str2;
            }
            echo(twoStringsInOne('Je m\'appelle ', 'Fabien'));
        ?>
    </p>
</body>
</html>