
<?php

$course1 = [
    'BSIT',
    'BSBA',
    'HMO',
    'NC2',
    'ENGiNEERING',
    'NURSE',
    'ARCHITECT',
    'TOURISM'
];

$course2 = [
    'HMO',
    'ENGiNEERING',
    'NURSE'
];

$result = array_diff($course1, $course2); 
?>

<html>
    <h1> <?php
    print_r($result);
     ?></h1>
</html>