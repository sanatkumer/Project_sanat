<?php

if (isset($_POST['submit'])) {

  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];

    if ($operator == 'add') {
    $result = $num1 + $num2;
  } elseif ($operator == 'subtract') {
    $result = $num1 - $num2;
  } elseif ($operator == 'multiply') {
    $result = $num1 * $num2;
  } elseif ($operator == 'divide') {
    $result = $num1 / $num2;
  }
} ?>

<form action="calculator.php" method="post">
  <input type="text" name="num1">
  <select name="operator">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
  </select>
  <input type="text" name="num2">
  <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($result)) {
  echo "Result: $result";
}
?>