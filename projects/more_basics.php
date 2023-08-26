<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>

<style>

    *{
        margin : 0;
        padding : 0;
        
    }

    .container{
        max-width: 80%;
        background-color :grey;
    }
    </style>
<body>
    <div class="container">
        <h1>Lets learn about PHP  </h1>
<p>Your party status </p>
    <?php 

    $age = 7;
    if($age > 18){
        echo "You can go in";
    }
    else if($age==7){
        echo "Your age is 7";
    }else {
        echo "You cannot enter";
    }


    // creating an array
    $languages = array("python","c++","php","Node");
    echo $languages[1];

    // count gives number of elements in array 
    echo count($languages);


    // loops in php
    // while loop

       //iterating arrays using while loops 
    $a = 0;
    while ($a < count($languages)){
        echo "<br>The value of a  from while is : ";
        echo $languages[$a];
        $a++;

    }

   //do while loops 
   // compulsory do will execute
   $a = 0;
   do{ 
       echo "<br>The value of a from do while is : ";
       echo $a;
       $a++;
   }while ($a < 10);

   // for loop 
  
   for ($a = 0;$a <10;$a++){
    echo "<br> The value os a from for loop is :";
    echo $a;
   }

   // for each loop VVVVVVVVVVVimp 
   // used tp iterate in array 

   foreach($languages as $value){
    echo "<br> The value is echo from for each : ";
    echo $value;
   }
   
// function
   echo "<h1> Function </h1>";

   function print5(){
    echo "FIVE";
   }

   print5();

   function printnumber($number){
    echo "Your number is ";
    echo $number;
   }
   printnumber(56);
   printnumber(6);
   printnumber(88);


 
   
   

 
    
?>


$languages = array("python","c++","php,Node");

    </div>
</body>
</html>