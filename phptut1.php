<html>
<head>
<title><?php echo "Website Title"; ?></title>
</h'ad>
echo "Website Title"; ?></title>
'/
<body>
<?php
//A comment is here
#Another comment
/*multi
line
*/

echo("<p>Random Text</p>");
print("<p> Using print</p>");
print "<p>Without brackets</p>";

$randVar = "Cats"; //variables are case sensitive
 echo"<p>".$randVar. " are funny</p>";
 printf("<p>My name is %s I'm %d years old and pi is equal to %.2f </p>",'Daniel',18,3.1453); //.2f only display float values after 2 decimals 

 $boolEx1 = false;
 $boolEx2 = true;

 $intEx = -234; //2^63 is max
 $floatEX1 = 3345.14432;
 echo "<p>Cost: $". number_format($floatEX1,2). "</p>";

 $firstname = "Doctor";
 $lastname = "Who";

 $wholename = $firstname . ' '.$lastname;

 echo "How do quotes differ $wholename?<br />";
 echo 'How do quotes differ $wholename?<br />';

 define('ACONSTANT',2345);
 echo "A constant equals ". ACONSTANT . "<br>";

 $strNum = "28";
 echo $strNum * $floatEX1; 

 $floatEX2 = (int) $floatEX1; //example of casting variables into other types
 echo "<br> $floatEX2 <br>";

 //(array) (bool) (object) (float) (double) (string) casting options

 echo gettype($strNum). "<br>"; //gets type variable is using
 echo is_string($strNum). "<br>"; //gives 1 when true
 echo is_int($strNum). "<br>"; //apparently gives nothing when false but idfk
 //is_array is_bool is_float is_integer is_null is_object
?>
</body>
</html>
