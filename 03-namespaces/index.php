<?php

use People\Group;

require './app/member.php'; //definirat ga na vrhu prije ostalih klasa
require './app/Person.php';
require './app/Student.php';
require './app/Teacher.php';
require './app/Group.php';
require './app/Guest.php';
require './app/bot.php';
require './app/People/group.php';

//inicijalizacija objekata
$teacher = new Teacher('Ivan', 'Mandic');
$student = new Student('Ivo', 'Ivic');
$student2 = new Student('Marko', 'Maric');
$student3 = new Student('Ana', 'Anic');
$guest = new Guest('gost', 'gost');
$discordbot = new Discordbot();

$group = new \Group; 
$group->addMember($teacher);
$group->addMember($student);
$group->addMember($student2);
$group->addMember($student3);
$group->addMember($guest);
$group->addMember($discordbot);
$group->displayInfo();

$groupOfPeople = new Group([$teacher, $student, $student1]);
echo "Broj ljudi u grupi je : {$groupOfPeople->getPeopleCount()} \n";