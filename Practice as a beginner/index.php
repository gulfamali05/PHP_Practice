<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <div class="container">
  <h3><?php
  echo "Hi! Now I am Starting learning php as a backend language"
  ?></h3>
  <p>
    What is variables. <br>
    <ol>
      <li>Variables are containers for data</li>
    </ol>
    Rules For Variable
    <ul>
      <li>
        Must start with $ sign
      </li>
      <li>
        letters,numbers,underscore and digit can be a variable name
      </li>
      <li>
        variable names are case sensitive means name and NAME is different.
      </li>
      <li>
        After Dollor sign letters or underscore could be the first character not a digit is allowed as a first character
      </li>
    </ul>
    For Example: syntax to declare a variable
                $_variable name ;
  </p>
  <hr>
  <?php
    $name = "Gulfam"; 
    echo "$name <br>"; 
    $var1 = 5;
    $var2 = 4;
    $var = $var1 + $var2;
    echo $var;    
    ?>
    <br>
    </div>
    <form action="" method="post">
    <input type="text" name= "userName">
    <input type="submit" value="submit">
    </form>
    <?php
      $value=$_POST['userName'];
      echo $value;
    ?>
    <ul>String Functions in php
      <li>strlen.stringname->Check string length and return it e.g
        <?php
        echo "<br><br>";
        $str = "->This is a string Basically A String is a Sequence of Characters";
        echo var_dump($str);
        
        echo "<br>->The length of string is".strlen($str);
        echo "<br>2.str_word_count();<br>->The words in string str is".str_word_count($str);
        echo "<br>3.Strrev(strname);<br>Reverse the String ->" .strrev($str);
        echo "<br>";
        echo strpos($str, 'Basically');
        ?>
        <hr>
      </li>
    </ul>
</body>
</html>
