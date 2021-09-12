<?php
include 'includes/class-autoload.inc.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
            $testObj = new Test();
            
            $testObj->getUsers();
            $testObj->getUsersStmt("Timmy", "Doe");
            $testObj->setUsersStmt("Alice", "Doe", "1997-01-28");
        ?>
    </body>
</html>