<?php
$fullname= $_POST['fullname'];
$phonenumber= $_POST['phonenumber'];
$idnumber= $_POST['idnumber'];
$email= $_POST['email'];
$address= $_POST['address'];
$password= $_POST['password'];

//Database connection
$conn= new mysql('localhost','root','login and registration');
if($conn->connect_error){
    die('Connection Failed :' $conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into registration(fullname,phonenumber,idnumber,email,address,password)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("siisss",$fullname, $phonenumber, $idnumber, $email, $address,$password);
    $stmt->execute();
    echo "Successfully Registered...";
    $stmt->close();
    $conn->close();
}


?>