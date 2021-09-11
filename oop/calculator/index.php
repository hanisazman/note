<?php

    declare(strict_types = 1); //1=true, 0=false
    include 'includes/autoLoader.inc.php';
?>

<html>
    <head>
        <meta charset="utf-8">
        <title> OOP Tutorial Calculator </title>
    </head>  
    
    <body>
        <form action="includes/calc.inc.php" method="post">
            <p> My Own Calculator </p>
            <input type="number" name="num1" placeholder="first number"/>
            <select name="oper">
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="div">Division</option>
                <option value="mul">Multiplication</option>
            </select>    
            <input type="number" name="num2" placeholder="second number"/>
            <button type="submit" name="submit">Calculate</button>
        </form>
    </body>    
</html>