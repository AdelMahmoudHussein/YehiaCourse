<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>15 Classes Inheritance</title>
    </head>   
</html>
<?php
echo '<pre>';
/**
 * Constructor, Destructor
 * Access Modifiers = Visibility
 * Inheritance
 * Differences between Scope & Context ???
 */


/*
 * Access Modifiers : 
 * Public
 * Private
 * Protected
 */

class Student 
{
    public $name;
    public $age;
    private $level;
    public $score;
    public $subjects = array(
        'Arabic'    => 0,
        'English'   => 0,
        'Math'      => 0,
        'Science'   => 0
    );
    public $minScore = 150;
    public $maxScore = 300;
    
    public function __construct($name, $age) 
    {
        $this->name = $name;
        if($age >= 12){
        $this->age = $age;
        } else {
            throw new Exception('Sorry Student\'s age must be greater than 12');
        }
    }
    
    public function welcomeStudent() 
    {
        echo 'Welcome to our class '. $this->name;
    }
    
    public function setLevel($level) 
    {
        // This will convert it to integer then take absolute value of it
        $level = abs(filter_var($level, FILTER_SANITIZE_NUMBER_INT));
        if($level < 1 || $level > 12)
        {
            throw new Exception('Level must be between 1, 12');
        } else {
            $this->level = $level;
        }
    }
    
    public function getLevel()
    {
        return $this->level;
    }
    
    public function setName($name) 
    {
        $this->name = $this->filterName($name);
    }
    
    private function filterName($name) 
    {
        return ucwords(substr($name, 0, 12));
    }
}

$ahmed = new Student('Ahmed Ali Ibrahim', 12);

//$ahmed->welcomeStudent();

$ahmed->setLevel(11);

echo $ahmed->getLevel();






echo '</pre>';