<?php
function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
};

function ageCheck ($age) {
    if  ($age <= 21){
        echo 'You must be 21 to enter';
    } else {
        echo 'Alright, it\'s time to party!';
} }