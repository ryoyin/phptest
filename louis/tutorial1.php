<?php

$my_age = 65;

$adult = 18;
$elder = 60;

if ($my_age >= $elder) { // 60
    generateTicketFare('elder');
} else if ($my_age >= $adult) { // 18
    generateTicketFare('adult');
} else {
    generateTicketFare('teenager');
}


function generateTicketFare($ageGroup) {
    $ticketFee = 20;

    switch ($ageGroup) {
        case 'elder':
            $ticket = promotion($ticketFee);
            break;
        case 'adult':
            $ticket = $ticketFee;
            break;
        case 'teenager':
            $ticket = 10;
            break;
    }

    echo $ticket;
}

function promotion($ticketFee) {
    return $ticketFee * 0.2;
}