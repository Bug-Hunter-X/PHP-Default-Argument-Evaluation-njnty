function foo($a, $b = null) {
  if (!isset($b)) {
    $b = 2; // Assign default value only if not set
  }
  return $a + $b;
}

// Or by checking the type
function foo($a, $b = null) {
  if (is_null($b)) {
    $b = 2; // Assign default value only if null
  }
  return $a + $b;
}

//Now the following call will produce the expected result:
$result = foo(1, 0); // 1
$result2 = foo(1); // 3