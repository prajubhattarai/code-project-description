<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy Variable</title>
</head>
<body>
    <?php
    $name='Hello User';
    echo "before unset:".$name;
    echo"<br>";
    unset(name);
    echo"after unset:".$name;
    ?>  
</body>
</html>