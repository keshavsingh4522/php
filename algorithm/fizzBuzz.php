<?php
/**
 * The FizzBuzz problem:
 * Write a short program that prints each number from 1 to 100 on a new line. 
 *  - For numbers multiple of 3, print "Fizz" instead of the number. 
 *  - For numbers multiple of 5, print "Buzz" instead of the number. 
 *  - For numbers which are multiples of both 3 and 5, print "FizzBuzz" instead of the number.
 */

function fizzBuzz(int $maxNumber = 100)
{
    for ($i = 1; $i <= $maxNumber; ++$i) {
        if ($i % 3 === 0 && $i % 5 === 0) { // You can do $i % 15 instead
            echo "FizzBuzz" . PHP_EOL;
        } else if ($i % 3 == 0) {
            echo "Fizz" . PHP_EOL;
        } else if ($i % 5 == 0) {
            echo "Buzz" . PHP_EOL;
        } else {
            echo $i . PHP_EOL;
        }
    }
}

echo fizzBuzz();