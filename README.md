# php-fibonacci

Based upon https://github.com/T-PWK/go-fibonacci

And quoting:

In mathematics, the Fibonacci numbers are the numbers in the following integer sequence, called the Fibonacci sequence, and characterized by the fact that every number after the first two is the sum of the two preceding ones:

```
1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, ...
```

Often, especially in modern usage, the sequence is extended by one more initial term:

```
0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, ...
```

This implementation has two methods: `fibonacci` and `fibonacci_big`.

The `fibonacci` function is more efficient, however, it returns correct numbers between 0 and 93 (inclusive). The `fibonacci_big` function, on the other hand, is less efficient but returns practically any Fibonacci number.

Examples:
```php
$f = fibonacci(10);
$fb = fibonacci_big(200);
```

You can run using:

```
php exec.php
php big.php
```

The output is

exec.php

```
Tests - Success.
Tests - Success.
Tests - Success.
Benchmark 10 run: 167,864/sec or 0.0059572034504122ms/op
Benchmark 20 run: 1,370/sec or 0.72992700729927ms/op
Benchmark 10 tuned run: 3,459,629/sec or 0.00028904833437343ms/op
Benchmark 20 tuned run: 2,151,116/sec or 0.00046487497652381ms/op
```

```
100: 3.5422484817926E+20
200: 2.8057117299251E+41
300: 2.2223224462942E+62
400: 1.7602368064501E+83
```
