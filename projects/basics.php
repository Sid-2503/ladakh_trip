<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first PHP website 

        <?php
        
    echo "Hello world, this is printed using PHP";
    // this is single line comment 
    /* this is 
    multi line comment */

    // variables are created using $
 $variable1 = 5;
 $variable2 = 4;
 echo $variable1;
 echo $variable2;
echo $variable1 + $variable2;

//operators in php 
// Arithmetic 
echo "The value of variable1 + variable2 is ";
echo "<br>"; // this is used for new line
echo $variable1 + $variable2;
echo "<br>";
echo $variable1 - $variable2;
echo "<br>";
echo $variable1 * $variable2;
echo "<br>";
echo $variable1 / $variable2;
echo "<br>";

// Assignment 
$newvar = $variable1;
$newvar += 1;
$newvar -= 1;
$newvar *= 1;
$newvar /= 1;
echo " Value of new var is :";
echo $newvar;
echo "<br>";
$newvar += 1;
echo "<br>";

// Comparison
echo "<h1> Comparison Operators </h1>";
// comparison operators return boolan
echo " the value os 1 == 4 is ";
echo var_dump(1==4);
echo "<br>";

// similar for !=, <=, >=


// Increment Decrement 

echo $variable1++; // print and then increment
echo "<br>";
echo $variable1;
echo $variable1--;
echo "<br>";
echo ++$variable1; // increment and then print 
echo "<br>";
echo --$variable1;
echo "<br>";


// Logical 
// and , or , xor , not
// xor req one false one true 


$myvar = (true) && (true);
echo var_dump($myvar);
echo "<br>";



// data types in php 
echo "<h2> Data types </h2>";
// String , intgeer , float , Boolean , Array, Object  - primarily used data types 
 $var = " This is string ";
 echo var_dump($var);
 echo "<br>";

 $var = 88;
 echo var_dump($var);
 echo "<br>";


 $var = 67.1;
 echo var_dump($var);
 echo "<br>";

 $var = true;
 echo var_dump($var);
 echo "<br>";

 // const is value which is identifier and cannot be changed 
 // put constant at strt of script 
 define('PI', 3.14);
 echo PI;


 






?>
    </div>
</body>
</html>