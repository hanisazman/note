<?php
// Regular class

include_once "classes/simpleClass.class.php";

$obj = new SimpleClass();
$obj->helloWorld();

// Anonymous class - will not store in the memory, so less heavy

$newObj = new class()
{
    public function helloWorld()
    {
        echo "Hello World2!";
    }

};
$newObj->helloWorld();