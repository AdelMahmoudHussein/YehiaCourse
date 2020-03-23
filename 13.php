<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>13 User Defiend Functions</title>
    </head>
    <body>

    </body>
</html>
<?php

$ahmed_salary = 4000;
$mohamed_salary = 5000;
$ahmed_tax = 0.05;
$mohamed_tax = 0.7;

/**
 * calculate the net salary of employee after tax
 * @param mixed $salary
 * <p>The initial salary of the employee before tax</p>
 * @param float $tax
 * <p>The tax that applied to the employee's salary</p>
 * @return float $net_salary
 * <p>The employee's net salary after applied tax</p>
 */
function calcNetSalary($salary, float $tax) 
{
    $net_salary = $salary - ($salary * $tax);
    return $net_salary;
}

$ahmed_net_salary = calcNetSalary($ahmed_salary, $ahmed_tax);
echo $ahmed_net_salary.'<br>';


?>