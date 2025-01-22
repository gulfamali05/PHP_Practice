<!DOCTYPE html>
<html lang="en">
<head>
  <title>Conditional Statements</title>
</head>
<body>
  <div>
    <p>
      <h2>1.if else</h2>
      <!-- 1.If else Conditional Statements -->
       <?php
       $age = 20;
       if($age == 9){
        echo "you are 9 Years old <br>";
       }
       else{
        echo "Invalid Input <br>";
       }?>
       <h2>2.if elseif else</h2>
       <!-- 2.if elseif else -->
        <?php
        if($age == 9){
          echo "you are 9 Years old <br>";
        }
        elseif($age == 20){
          echo "you are 20 Years old <br>";
        }
        else{
          echo "Please check your input <br>";
        }?>
        <h2>3.Switch Statements</h2>
        <!-- Switch Case -->
         <?php
         switch ($age) {
          case '9':
            echo "9 Years";
            break;
          case '10':
            echo "10 Years";
            break;
            case '20':
              echo "20 Years";
              break;
          default:
            echo "Check Input";
            break;
         }?>
    </p>
  </div>
</body>
</html>