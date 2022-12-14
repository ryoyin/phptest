<?php

// $mobiles = [
//     [
//         'Apple',
//         'iOS',
//         'iphone4',
//     ],
//     [
//         'Samsung',
//         'Android',
//         'Galaxy',
//     ],
// ];

$brandArray = ['Apple', 'Samsung', 'LG', 'Window', 'Nokia'];
// echo $brandArray[0];
// echo $brandArray[1];
// echo $brandArray[2];

// echo count($brandArray);

// for ($i = 0; $i < count($brandArray); $i++) {
//     echo $brandArray[$i].'<br>';
// }

$i = 0;
echo 'I am while loop';
while ($i < count($brandArray)) {
    echo $brandArray[$i].'<br>';
    $i++;
}