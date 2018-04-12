<!DOCTYPE html>
<html>
    <head>
        <title>My First Model View Controller</title>
    </head>
    <body>
        <H1>Hello from the view</H1>
        <?php
        echo "my name is ".$firstname." ".$lastname.".<br/>";
        ?>

        <ul>
            <li>User ID: <?php echo $userid;?></li>
            <li>FirstName: <?php echo $firstname;?></li>
            <li>LastName: <?php echo $lastname;?></li>
            <li>Email: <?php echo $email;?></li>
            <li>Role: <?php echo $role;?></li>
        </ul>
    </body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 4/11/2018
 * Time: 4:22 PM
 */