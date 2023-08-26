<?php
// mysql database connection 
// by using mysqli (i stands for improved)
$insert = false;
if (isset ($_POST['name']))
// connection variables
$server = "localhost";
$username = "root";
$password = "";

// creating conenction

$con = mysqli_connect($server,$username, $password);

if(!$con){
    die("Conenction failed".mysqli_connect_error());
}

// after connection steps
// collect post variables
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
// query execution
$sql = "INSERT INTO `ladakh_trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ( '$name',
'$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

// insert in database
// -> object operator
//flag for successfull insertion 
if($con->query($sql) == true){
   $insert = true;
}
else {
    echo "error : $sql <br> $con ->error";


}

// close the database connection
$con -> close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <img class="bg" src="bg.jpg" alt="DYP JPG">
    <div class="container">
        <h3>Welcome to DYPIEMR , Ladakh Trip Form</h3>
        <p>Enter your details to confirm your participation</p>
        <?php 
       if($insert == true){
       echo "<p class='thanks'>Thanks for submitting your form, we are happy to see you joining us for Ladakh trip</p>";
       }

       ?>

        <!--FORM-->
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">

            <input type="number" name="age" id="age" placeholder="Enter Your age">


            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">

            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone Number">

            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other Information"></textarea>

            <button class="btn">Submit</button>

        </form>

    </div>



    <script src="index.js"></script>


</body>

</html>
