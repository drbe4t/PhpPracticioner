<?php
require 'functions.php';

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
    'completed'=>true,
];


//  pre tags helps to format contetn in the array
// echo '<pre>';

// die(var_dump($animals));

// echo '</pre>';

// How to make a function


echo ageCheck(27);

require 'index.view.php';