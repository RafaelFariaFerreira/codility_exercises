<?php

function solution($N)
{
    $N = decbin($N);
    $N = trim($N, "0");
    $N = explode("1", $N);
    $biggest = (int) 0;

    foreach ($N as $gap) {
        $biggest = strlen($gap) > $biggest ? strlen($gap) : $biggest;
    }
    return $biggest;
}
