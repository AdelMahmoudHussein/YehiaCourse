<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>13 User Defiend Functions</title>
    </head>   
</html>
<?php

$ahmed_salary = 4000;
$mohamed_salary = 5000;
$ahmed_tax = 0.05;
$mohamed_tax = 0.07;

/**
 * calculate the net salary of employee after tax
 * @param mixed $salary
 * <p>The initial salary of the employee before tax</p>
 * @param float $tax
 * <p>The tax that applied to the employee's salary</p>
 * @return float $net_salary
 * <p>The employee's net salary after applied tax</p>
 */
function calcNetSalary($salary, $tax) 
{
    if((is_float($salary) || is_int($salary)) &&
            (is_float($tax) && $tax <= 0.20))
    {
        $salary = abs($salary);
        $tax = abs($tax);
        return (float)($salary - ($salary * $tax));
    }

}

$ahmed_net_salary = calcNetSalary($ahmed_salary, $ahmed_tax);
$mohamed_net_salary = calcNetSalary($mohamed_salary, $mohamed_tax);
//echo $ahmed_net_salary.'<br>';
//echo $mohamed_net_salary.'<br>';


/**
 * Calculate the positive integer power of any integer base. 
 * @param int $base <p>The base number</p>
 * @param int $power <p>The power number</p>
 * @return int <p>The result of the calculation</p>
 * @example toThePower(2, 3) <p>description:<br> This is equal to 2 ^ 3 = 8</p>
 */
function toThePower($base, $power)
{
    if(is_int($base) && is_int($power))
    {
        $power = abs($power);
        $result = 1;
        for ($i = 0; $i < $power; $i++) 
        {
            $result *= $base;
        }
        return $result;
    }
}

/*
echo toThePower(2, 5).'<br>';
echo toThePower(2, 3.25).'<br>';

echo toThePower(-2, 5).'<br>';
echo toThePower(-2, 6).'<br>';

echo toThePower(2, -5).'<br>';
echo toThePower(-2, -5).'<br>';
*/
