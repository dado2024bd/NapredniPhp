<?php

use App\Discordbot;
use App\Guest;
use App\Group;
use App\People\Group as PeopleGroup;
use App\Student;
use App\Teacher;


// require './app/interface/Member.php'; //definirat ga na vrhu prije ostalih klasa
// require './app/Person.php';
// require './app/Student.php';
// require './app/Teacher.php';
// require './app/Group.php';
// require './app/Guest.php';
// require './app/Discordbot.php';
// require './app/People/Group.php';

require './autoloader.php';
//inicijalizacija objekata
$teacher = new Teacher('Ivan', 'Mandic');
$student = new Student('Ivo', 'Ivic');
$student2 = new Student('Marko', 'Maric');
$student3 = new Student('Ana', 'Anic');
$guest = new Guest('gost', 'gost');
$discordbot = new Discordbot();

$group = new Group; 
$group->addMember($teacher);
$group->addMember($student);
$group->addMember($student2);
$group->addMember($student3);
$group->addMember($guest);
$group->addMember($discordbot);
$group->displayInfo();

$groupOfPeople = new PeopleGroup([$teacher, $student, $student]);
echo "Broj ljudi u grupi je : {$groupOfPeople->getPeopleCount()} \n";