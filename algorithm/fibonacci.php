<?php

function fibonacci(int $number): int
{
	if ($number === 0 || $number === 1) {
		return $number;
	}

	return fibonacci($number - 1) + fibonacci($number - 2);
}

for ($i = 0; $i <= 10; $i++) {
	echo "Fibonacci {$i} is " . fibonacci($i) . "\n";
}