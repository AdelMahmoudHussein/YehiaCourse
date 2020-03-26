<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>14 Classes Introduction</title>
    </head>   
</html>
<?php

class Employee
{
    public $name;
    public $age;
    public $address;
    
    public $salary = 1500;
    public $tax;
    public $overtime;
    public $overtimeRate;
    public $abbsent;
    public $abbsentRate;
    
    public function calculateOvertime() 
    {
        return $this->overtime * $this->overtimeRate;
    }
    
    public function calculateAbbsent() 
    {
        return $this->abbsent * $this->abbsentRate;
    }

    public function calculateTotalSalary() 
    {
        return ($this->salary - ($this->salary * $this->tax) + $this->calculateOvertime() - $this->calculateAbbsent());
    }
    
}

$ahmed = new Employee;

$ahmed->name = 'Ahmed Mohamed Ali';
$ahmed->age = 19;
$ahmed->tax = 0.05;
$ahmed->address = 'Cairo';
$ahmed->overtime = 20;
$ahmed->overtimeRate = 30;
$ahmed->abbsent = 2;
$ahmed->abbsentRate = 100;

echo '<p>' . $ahmed->name . ' has overtime of ' . $ahmed->calculateOvertime() . ' L.E</p>';
echo '<p>' . $ahmed->name . ' has abbsent of ' . $ahmed->calculateAbbsent() . ' L.E</p>';
echo '<p>' . $ahmed->name . ' has total salary of ' . $ahmed->calculateTotalSalary() . ' L.E</p>';


$mohamed = new Employee;

$mohamed->name = 'Mohamed Ali';
$mohamed->age = 29;
$mohamed->salary = 3000;
$mohamed->tax = 0.07;
$mohamed->address = 'Cairo';
$mohamed->overtime = 10;
$mohamed->overtimeRate = 50;
$mohamed->abbsent = 3;
$mohamed->abbsentRate = 200;


echo '<p>' . $mohamed->name . ' has overtime of ' . $mohamed->calculateOvertime() . ' L.E</p>';
echo '<p>' . $mohamed->name . ' has abbsent of ' . $mohamed->calculateAbbsent() . ' L.E</p>';
echo '<p>' . $mohamed->name . ' has total salary of ' . $mohamed->calculateTotalSalary() . ' L.E</p>';