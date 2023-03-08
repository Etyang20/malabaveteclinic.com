<?php
$petname= $_POST['petsname'];
$age= $_POST['age'];
$color= $_POST['color'];
$signs= $_POST['signs'];
$diagonised= $_POST['diagonised'];
$medication= $_POST['medication'];
$ownersname= $_POST['ownersname'];
$email= $_POST['email'];
$phonenumber= $_POST['phonenumber'];
$date= $_POST['date'];
$gender= $_POST['gender'];
//Database connection
$conn= new mysql('localhost','root','medication');
if($conn->connect_error){
    die('Connection Failed :' $conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into medical record(petsname,age,color,signs,diagonised,medication,ownersname,email
    ,phonenumber,date,gender)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("sissssssiis",$petsname,$age,$color,$signs,$diagonised,$medication,$ownersname,$email
    ,$phonenumber,$date,$gender);
    $stmt->execute();
    echo "Successfully Registered...";
    $stmt->close();
    $conn->close();
}


?>