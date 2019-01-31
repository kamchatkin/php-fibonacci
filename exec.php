<?php

require './fib.php';

test_fibonacci_recursive();
test_fibonacci();
test_fibonacci_big();

$benchmark_10 = benchmark(function() {
  fibonacci_recursive(10);
});

echo "Benchmark 10 run: ".number_format($benchmark_10)."/sec or ".(1000/$benchmark_10)."ms/op\n";

$benchmark_20 = benchmark(function() {
  fibonacci_recursive(20);
});

echo "Benchmark 20 run: ".number_format($benchmark_20)."/sec or ".(1000/$benchmark_20)."ms/op\n";

$benchmark_10 = benchmark(function() {
  fibonacci(10);
});

echo "Benchmark 10 tuned run: ".number_format($benchmark_10)."/sec or ".(1000/$benchmark_10)."ms/op\n";

$benchmark_20 = benchmark(function() {
  fibonacci(20);
});

echo "Benchmark 20 tuned run: ".number_format($benchmark_20)."/sec or ".(1000/$benchmark_20)."ms/op\n";
