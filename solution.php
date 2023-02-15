function summation($n) {
  $array = [];
  for ($x= 1; $x <= $n; $x++) {
    array_push($array, $x);
  }
  return array_sum($array);
}
