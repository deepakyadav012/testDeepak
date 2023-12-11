<?php
$insert = false;
if(isset($_POST['name']));

   $server ="localhost";
   $username ="root";
   $password ="";
  
   $con = mysqli_connect( $server, $username, $password);
  

   if(!$con){
    die("connection to this data base failed due to" . mysqli_connect_error());
   }
//    echo "succes connecting to the db";

$name = $_POST['name'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$phone = $_POST['phone'];

$sql ="INSERT INTO `login`.`loginin` (`name`, `Age`, `gender`, `email`, `phone`) VALUES ('$name', '$Age', '$Gender', '$Email', '$phone')";
// echo $sql;

if($con->query($sql) == true){
    // echo "succesfully inserted";
    $insert = true;
}

else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>welcome to government polytecnic bhaga dhanbad</h1>
        <h1>registration form</h1>
        
        //<?php
       // if($insert == true){
       //echo "<p class='cont'>form fill up is succesfully submited</p>";
        //}
        //?>
        
       
        <form action="/index.php" name="myform" id="myForm" onsubmit="return validateform()" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name"> <b> <span class="formerror"> </span></b>
            <input type="text" name="Age" id="Age" placeholder="Enter your Age">
            <input type="text" name="Gender" id="Gender" placeholder="Enter your Gender">
            <input type="email" name="Email" id="Email"  placeholder="Enter your Email">
            <input type="number" name="phone" id="phone"  placeholder="Enter your phone">
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <input type="password" name=" confurm password" id=" confurm password" placeholder=" Re-Enter your password">
            <button class="btn">submit</button>
            <button class="btn">login</button>
        </form>
    </div>
    <!-- <div class="container">
        <?php
        // $sql ="SELECT * FROM ``";
        // $result = mysqli_query($con, $sql);

        // while($row = mysqli_fetch_assoc($result)){
        //     // echo var_dump($row);
        //     echo $row['sno'] . ".hello" . $row['name'] . $row['age'] . $row['gender'] . $row['email'] . $row['phone'];
        // echo"<br>";
        // }
        ?>
    </div> -->
    
</body>
</html>
