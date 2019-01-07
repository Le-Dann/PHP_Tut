<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>I have the info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        echo "He said \"Hello\" to him"; //Backslash used to escape double quotes
    ?>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method = "POST" > <!-- wird als http://localhost:8080/PHP_Tut/phptut2.php gezeigt-->
        <p> Name:
            <input type = "text" name = "name" size = "30" value= ""/>
        </p>
        <p> Address:
            <input type = "text" name = "address" size = "30" value= ""/>
        </p>
        <p> City:
            <input type = "text" name = "city" size = "30" value= ""/>
        </p>
        <p> State:
            <input type = "text" name = "state" size = "30" value= ""/>
        </p>
        <p> Guess a numer from 1 to 10:
            <input type = "text" name = "number" size = "30" value= ""/>
        </p>
        <p> Cats, Dogs or Fish?:
            <input type = "text" name = "pet" size = "30" value= ""/>
        </p>
        <p> 
            <input type = "submit" name = "submit"  value= "Send"/>
        </p>
        </form>

         <?php
         if (isset($_POST['submit'])) 
         {
            echo "<br>I know everything ". $_POST["name"]."<br>";
            echo "You live at ".$_POST['address']. " ".$_POST['city']." ".$_POST['state']."<br> ";
         }

         echo( "Did you guess my numer? <br>");
         $numGuessed= (int) $_POST['number'];

         if (($numGuessed == 5) AND ($numGuessed < 11))
          {
             echo("You guessed it. It was ". $_POST['number']);
          }
          elseif ($numGuessed > 5)
           {
            echo("Too high");
          }
          else
           {
              echo("Too low<br>");
           }

           $favPet = $_POST['pet'];

           switch ($favPet) 
           {
               case 'Dogs':
                   echo("Woof");
                   break;
                case 'Cats':
                   echo("Meow");
                   break;
                case 'Fish':
                   echo("Gloop gloop");
                   break;
               
               default:
                   echo("Grrr");
                   break;
           }


         ?>
</body>
</html>