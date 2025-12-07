<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Casting</title>
</head>
<body>
    <pre>
        <?php
        $weight= (double) 13;
        var_dump($weight);
        echo'<br>';
        $weight = (int) 14,8;
        var_dump($weight);
        echo '<br>';
        $sentence = "This is test string";
        echo (int) $sentences;
        echo '<br>'
        $age = 112;
        $agelist = (array) $age;
        echo $agelist[0];
        echo '<br>';
        $gender = "Male";
        $obj = (object) $gender;
        var_dump($obj);
        ?>
    </pre>
</body>
</html>