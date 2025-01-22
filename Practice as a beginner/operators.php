<!DOCTYPE html>
<html lang="en">
<head>
  <title>Operators in Php</title>
</head>
<style>
  body{
    background: color #868286;
  }
</style>
<body>
  <h2>1.Arithematic Operators</h2>
  <h3>for a = 90 & b = 9</h3>
  <!--1Arithematic Operators -->
  <?php
  $a = 90;
  $b = 9;
  echo 'Sum of a&b is =' . ($a + $b);
  echo '<br>Substraction of a&b is =' . ($a - $b);
  echo '<br>Multiplication of a&b is =' . ($a * $b);
  echo '<br>Divsion of a&b is =' . ($a / $b);
  echo '<br>% of a&b is =' . ($a % $b);
  echo '<br>** means a power b =' . ($a ** $b);
?>
  <h2>2.Assignment Operators</h2>
  <h3>for a = 90 & b = 9</h3>
  <?php
  echo '<br> a += 6 means a = a+6 : ' .$a += 6;
  echo '<br> a -= 6 means a = a-6 : ' .$a -= 6;
  echo '<br> b *= 6 means b = b*6 : ' .$a *= 6;
  echo '<br> a /= 6 means a = a/6 : ' .$a /= 6;
  echo '<br> a **= 6 means a = a power 6 : ' .$a **= 6;
?>
 <h2>3.Comparison  Operators</h2>
 <h3>for a = 90 & b = 9</h3>
 <ul>
  <li><</li>
  <li>></li>
  <li>>=</li>
  <li><=</li>
</ul>
 <h2>4.Logical Operators</h2>
 <ul>
  <li>AND(&&)</li>
  <li>OR(||)</li>
  <li>Not(!)</li>
</ul>
</body>
</html>