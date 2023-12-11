<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="dbdeepak6";

$con = mysqli_connect($servername, $username, $password, $database );
if(!$con){
    die("sorry we failed to connect:" . mysqli_connect_error());
}
// else{
//     echo "connection was successful<br>";
// }
$sql ="SELECT * FROM `grud`";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
echo $num;
// $no=1;

// if($num> 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo"<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno'] . ".hello" . $row['name'] . $row['age'] . $row['gender'] . $row['email'] . $row['phone'];
    echo"<br>";
    // $no = $no +1;
    }
// }
?>







