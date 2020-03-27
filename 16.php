<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>16 Classes Inheritance 2</title>
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

class Student 
{
    protected $name;
    protected $age;
    protected $level;
    protected $score;
    protected $subjects = array(
        'Arabic'    => 0,
        'English'   => 0,
        'Math'      => 0,
        'Science'   => 0
    );
    protected $minScore = 100;
    protected $maxScore = 200;
    
    public function __construct($name, $age) 
    {
        $this->setName($name);
        $this->setAge($age);
    }
    

    private function setName($name) 
    {
        $name = strtolower($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $name = ucwords($name);
        $name = substr($name, 0, 20);
        $this->name = $name;
    }

    public function getName() 
    {
        return $this->name;
    }
    
    private function setAge($age)
    {
        $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
        $age = abs($age);
        if($age < 12 || $age > 20)
        {
            throw new Exception('Age Must be between 12 and 20');
        } else 
        {
            $this->age = $age;
        }
        
        
        
    }
    
    public function getAge() 
    {
        return $this->age;
    }
    
    public function getSubjects() 
    {
        return $this->subjects;
    }

    public function getMinScore() 
    {
        return $this->minScore;
    }

    public function getMaxScore() 
    {
        return $this->maxScore;
    }
    
    public function setSubjectScore($subjectName, $subjectScore) 
    {
        if (array_key_exists($subjectName, $this->subjects)) 
        {
            $subjectScore = abs(filter_var($subjectScore, FILTER_SANITIZE_NUMBER_INT));
            if($subjectScore > 50)
            {
                throw new Exception('The Maximum Subject Score is 50');
            }else 
            {
                $this->subjects[$subjectName] = $subjectScore;
            }
        }else 
        {
            throw new Exception('Student doesn\'t have a subject named ' . $subjectName);
        }
    }
    
    public function getSubjectScore($subjectName) 
    {
        if (array_key_exists($subjectName, $this->subjects)) 
        {
            return $this->subjects[$subjectName];
            
        }else 
        {
            throw new Exception('Student doesn\'t have a subject named ' . $subjectName);
        }
    }
}


class Grade1Student extends Student
{
    private $activity;
    
    public function __construct($name, $age) 
    {
        parent::__construct($name, $age);
        $this->minScore = 125;
        $this->maxScore = 250;
        $this->subjects['Computer'] = 0;
    }
    
    public function setStudentAsActive() 
    {
        $this->activity = 'Active';
    }
    
    public function setStudentAsNotActive() 
    {
        $this->activity = 'Not Active';
    }
    
}


$ali = new Grade1Student("AlI MohAmed ALi Abo zaid",14);

//echo $ali->getName();

//echo $ali->getMinScore();

$ali->setStudentAsNotActive();

$ali->setSubjectScore('Arabic', 40);

echo $ali->getSubjectScore('Arabic');

//print_r($ali->getSubjects());

//var_dump($ali);






echo '</pre>';