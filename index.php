<?php 
$insert = false;
if(isset($_POST['name'])){

  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password);

  if(!$con){
      die("connection to this database failed due to" . mysqli_connect_error());
  }
  // echo "success connecting to the db";
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $desc = $_POST["desc"];
  $sql = "INSERT INTO trip.trip (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());"; 

  // echo $sql;

  if($con->query($sql) == true){
      echo "successfully  inserted";
  }
  else{
      echo "ERROR: $sql <br> $con->error";
  }

  $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Sriracha&display=swap" rel="stylesheet">

</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h3>Welcome to IIT Kharagpur US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <p class="submitMsg">Thanks for submitting your form.We are happyto see you for the US journey</p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter you Name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
    

</body>
</html>