<?php
$char = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

function generate_random($input, $len = 20)
{
    $input_len = strlen($input);
    $random_string = '';
    $i = 0;
    while ($i < $len) {
        $random_char = $input[mt_rand(0, $input_len - 1)];
        $random_string .= $random_char;
        $i++;
    }
    return $random_string;
}

echo generate_random($char, 30);
