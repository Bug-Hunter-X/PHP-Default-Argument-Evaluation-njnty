function foo($a, $b = null) {
  if ($b === null) {
    $b = 2; // Assign a default value
  }
  return $a + $b;
}

// The following call will produce an unexpected result:
$result = foo(1, 0); // 1, not 3
//It does not use the default value, which is a common mistake. 