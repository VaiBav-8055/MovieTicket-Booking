<?php
$moviename= $_POST['movie'];
$day= $_POST['day'];
$time= $_POST['time'];
if(!empty($moviename) || !empty($day) || !empty($time)){
    $connectagain=mysqli_connect("localhost","root","","login_register");
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $Choose ="SELECT "
    }
}
?>