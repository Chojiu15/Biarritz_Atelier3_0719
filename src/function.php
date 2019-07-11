<?php
$autor = ['Arthur','Gaetan',''];
$name = $autor [rand(0,2)];

function sayHello($name)
{
    if ($name == 'Arthur' || $name == 'Gaetan') {
        return "Hello $name";
    }
    else {
        return "Hello Dr. Manattan";
    }

}

echo sayHello($name);


?>
