<!DOCTYPE html>
<?php
session_start();
/*
* Author: Muhammed Salman Shamsi
* Created On: 30 Aug, 2016 9:55:31 AM
*/?>
<html>
    <head>
        <title>My Index Page</title>
        
    </head>
    <body>
        <?php
            if($_POST){
                if($_POST['logout']=="yes"){
                    session_destroy();
                }
            }
            if(isset($_SESSION['user']))
            {
                echo "<h1>Welcome $_SESSION[user]!</h1>"
                . "<b>College :</b> $_SESSION[college]<br>"
                . "<b>Class : </b> $_SESSION[class]<br>"
                . "<b>Batch : </b> $_SESSION[batch]<br>";
    
                echo "<br>"
                . "<form method='post' action='index.php'>"
                    . "<input type='hidden' name='logout' value='yes'/>" 
                    . "<input type='submit' value='Logout'/>"
                . "</form>";
            }
            else{
                header("Refresh: 0, url=login.php");
            }
        ?>
    </body>
</html>
