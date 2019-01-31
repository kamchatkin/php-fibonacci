<?php

function fibonacci_recursive(int $n):int {
  if ($n <= 1) {
    return $n;
  }

  return fibonacci_recursive($n-1) + fibonacci_recursive($n-2);
}

function fibonacci(int $n):int {
  if ($n <= 1) {
    return $n;
  }

  $n2 = 0;
  $n1 = 1;

  for ($i = 2; $i < $n; $i++) {
    $n2_ = $n2;
    $n2 = $n1;
    $n1 = ($n1 + $n2_);
  }

  return $n2 + $n1;
}

function fibonacci_big(int $n):float {
  if ($n <= 1) {
    return $n;
  }

  $n2 = 0;
  $n1 = 1;

  for ($i = 2; $i < $n; $i++) {
    $n2_ = $n2;
    $n2 = $n1;
    $n1 = ($n1 + $n2_);
  }

  return $n2 + $n1;
}

function test_fibonacci_recursive() {
  $data = [
    [0,0], [1,1], [2,1], [3,2], [4,3], [5,5], [6,8], [10,55], [42,267914296]
  ];

  foreach($data as $test) {
    $result = fibonacci_recursive($test[0]);
    if ($result !== $test[1]) {
      throw new \UnexpectedValueException("Error Processing Request. N: {$test[0]}, got: {$result}, expected: {$test[1]}", 1);
    }
  }

  echo "Tests - Success.".PHP_EOL;
}

function test_fibonacci() {
  $data = [
    [0,0], [1,1], [2,1], [3,2], [4,3], [5,5], [6,8], [10,55], [42,267914296]
  ];

  foreach($data as $test) {
    $result = fibonacci($test[0]);
    if ($result !== $test[1]) {
      throw new \UnexpectedValueException("Error Processing Request. N: {$test[0]}, got: {$result}, expected: {$float_test_value}", 1);
    }
  }

  echo "Tests - Success.".PHP_EOL;
}

function test_fibonacci_big() {
  $data = [
    [0,0], [1,1], [2,1], [3,2], [4,3], [5,5], [6,8], [10,55], [42,267914296]
  ];

  foreach($data as $test) {
    $result = fibonacci_big($test[0]);
    $float_test_value = (float) $test[1];
    if ($result !== $float_test_value) {
      throw new \UnexpectedValueException("Error Processing Request. N: {$test[0]}, got: {$result}, expected: {$float_test_value}", 1);
    }
  }

  echo "Tests - Success.".PHP_EOL;
}

/**
  * From https://gist.github.com/blongden/2352583
  */
function benchmark($x)
{
    $start = $t = microtime(true);
    $total = $c = $loop = 0;
    while (true) {
        $x();
        $c++;
        $now = microtime(true);
        if ($now - $t > 1) {
            $loop++;
            $total += $c;
            list($t, $c) = array(microtime(true), 0);
        }
        if ($now - $start > 2) {
            return round($total / $loop);
        }
    }
}
