<?php

$test = 'bbbb2';
$include = array('aaaa', 'bbbb');

if (in_array($test, $include)) {
    echo 'run';
} else {
    echo 'not run';
}