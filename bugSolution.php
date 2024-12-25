function foo(array $arr) {
  for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] === 'bar') {
      unset($arr[$i]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )
//Alternatively, use array_filter
function foo2(array $arr) {
  return array_filter($arr, fn($item) => $item !== 'bar');
}

$arr = ['foo', 'bar', 'baz'];
$result = foo2($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )