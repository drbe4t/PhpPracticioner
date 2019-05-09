<?php

$greeting = "Hello PHP";

$names  =  [
    'Dan',
    'John',
    'Sadie'

];

$animals = [
    'Bird',
    'Panda',
    'Bear',
    'Elephant'
];

//associative Arrays
$person = [
    'Name' => 'Danny',
    'Age' => 27,
    'Ethnicity'  => 'Hispanic',
    'Career' => 'Digital Content Producer',
];

$person['Food'] = 'taco';

// tasks
$tasks = [
    'title'=>'Design in XD',
    'due'=> 'Next Week',
    'assigned_to'=>'Dan',
    'completed'=>false,
];

require 'index.view.php';