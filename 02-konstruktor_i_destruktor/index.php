<?php

require './app/Group.php';
require './app/Person.php';
require './app/Student.php';
require './app/Teacher.php';


//inicijalizacija objekata
$student = new Student('Ivo', 'Ivic');

$student2 = new Student('Marko', 'Maric');

$student3 = new Student('Ana', 'Anic');


$group = new Group(students: [$stident, $student2, $student3]);
$group->displayInfo();

