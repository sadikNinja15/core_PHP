<?php

echo "Welcome to associative arrays in php ";
// These are called indexed arrays:
// $arr = array('this', 'that', 'what');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2]; 

// Associative arrays
$favCol = array('shubham' => 'red','rohan'=> 'green',
                    'sadik'=> 'brown', 8=>'this' );

                    // echo $favCol['sadik'];
                    // echo "<br>";
                    // echo $favCol['rohan'];
                    // echo "<br>";
                    // echo $favCol[8]; 
foreach ($favCol as $key => $value) {
    echo "<br>Favorite color of $key is $value";
}



?>
