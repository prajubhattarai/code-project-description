<html>
    <head>
        <title>$_REQUEST Example</title>

    </head>
    <body>
        <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Username: <input type="text" name="username">
            <input type ="submit">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $username = $_REQUEST['username'];
            if(empty($username)){
                echo"Username is empty";
            }else{
                echo $username;
            }
        }
        ?>
    </body>
</html>