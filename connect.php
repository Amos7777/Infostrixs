<?php

$authorname = $_POST['authorname'];

//Database connection

$conn = new  mysqli('localhost','root','','test1');
if($conn->connect_error)
{
    die('Connection failed :'  .$conn->connect_error);
}
else {
    $stmt = $conn->prepare("SELECT Quote1,Quote2,Quote3,Quote4,Quote5 from author where Name='');
    $stmt->bind_param(" ",$authorname);
    $stmt->execute();
    
    $stmt ->close();
    $conn ->close();

} 
?>
