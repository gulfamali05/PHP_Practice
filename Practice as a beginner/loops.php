<!DOCTYPE html>
<html lang="en">
<head>
  <title>Loops Concept</title>
</head>
<style>
body{
    background: color #868286;
  }
  pre{
    font-style:Georgia;
  }
</style>
<body>
  <h2>While loop</h2>
  <p>
    <pre>
      1.Initialization $i = 1;
      2.while(cond){
        body
        increement or decreement;
      }
      e.g;
      Print  Numbers from 0 to 10
      <?php
      $i = 0;
      while($i <= 10){
        echo '<br>'.$i;
        $i++;
      }?>
      <h2>Do While loop</h2>
      1.initialization $i = 1;
      do{
        body
        increement or decreement;
      }
      while(cond);
      e.g;
      Print Even Numbers btw 1 & 10
      <?php
      $j = 1;
      do{
        if($j % 2 == 0){
          echo '<br>'.$j;
        }
        $j++;
      }
      while($j <= 10 );
      ?>
      <h2>For loop</h2>
      syntax:
      for(initaialization;condition;increement or decrrement){
        body
      }
      e.g;
      Print Odd Numbers btw 1 & 10
      <?php
      for($k = 0; $k <= 10; $k++){
        if($k % 2 == 1){
          echo '<br>'.$k;
        }
      }?>
    </pre>
  </p>
  
</body>
</html>