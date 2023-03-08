<?php
$petsname= $_POST['petsname'];
$age= $_POST['age'];
$color= $_POST['color'];
$ownersname= $_POST['ownersname'];
$email= $_POST['email'];
$phonenumber= $_POST['phonenumber'];
$date= $_POST['date'];
$gender= $_POST['gender'];
$ad1= $_POST['ad1'];
$ad2= $_POST['ad2'];
//Database connection
$conn= new mysql('localhost','root','information update');
if($conn->connect_error){
    die('Connection Failed :' $conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into info update(petsname,age,color,ownersname,email,phonenumber,date,gender,ad1,ad2")
    values(?,?,?,?,?,?)");
    $stmt->bind_param("sisssiisss",$petsname, $age, $color, $ownersname, $email,$phonenumber,$date,$gender,$ad1,$ad2);
    $stmt->execute();
    echo "Successfully Recorded...";
    $stmt->close();
    $conn->close();
}
 


?>