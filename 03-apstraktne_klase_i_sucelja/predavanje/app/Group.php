<?php

class Group

{

    private array $members = [];

    public function addMember($member)
    {
        echo $member->displayJoinedMessage(), "\n";
        
        $this->members[] = $member;
    }

    public function displayInfo()
    {
        $memberCount = count($this->members);
        echo "Broj sudionika u sobi je $memberCount", "\n";

    }
/*
    public function __construct(private Teacher $teacher = new Teacher ('Ivan','Mandic'), private array $students = [])
    {}

    public function displayInfo()
    {
        echo "Nastavnik ove grupe je {$this->teacher->getFullName()}", "\n";

        $studentCount = count ($this->students);

        echo "Broj polaznika je $studentCount", "\n";

        foreach($this->students as $student){
            //var_dump($student);
            echo $student->sayHello(), "\n";
        }
    }*/
}