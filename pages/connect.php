<?php
 $Full name = $_POST['Full name'];
 $Email = $_POST['Email'];
 $message = $_POST['message'];

 $conn = new mysqli('localhost','root','test');
 $id = ''; 
if( isset( $_GET['id'])) {
    $id = $_GET['id']; 
} 
 if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
 }else{
    $stmt = $conn->prepare("insert into registration(name,email,message)values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$message);
    $stmt->execute();
    echo "success";
    $stmt->close();
    $conn->close();
}
?>
