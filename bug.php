function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//The bug is that when using unset() inside a foreach loop on an array, the array's internal pointer is modified. this could lead to unexpected skips over elements
//This can be solved by using a for loop or iterating over a copy of the array