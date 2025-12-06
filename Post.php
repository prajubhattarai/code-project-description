<html>
    <head>
        <title>$_POST Example</title> 
    </head>
    <body>
        <form action="post action="<?php echo $_SERVER['PHP_SELF'];?>">
            Username: <input type="text" name="Username">
            <input type = "submit">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $username=$_POST['username'];
            if(empty($username)){
                echo"Username is empty";
            }else{
                echo $username;
            }
        }
        ?>
    </body>
</html>