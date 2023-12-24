<?php
$Name=$_REQUEST['Name'];
$Address=$_REQUEST['Address'];
$gmail=$_REQUEST['gmail'];
$phone=$_REQUEST['phone'];
$age=$_REQUEST['age'];
$Weight=$_REQUEST['Weight'];
$Height=$_REQUEST['Height'];
$Companion=$_REQUEST['Companion'];


if(isset($_POST['btn']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="body_building";

    $conn = mysqli_connect($host,$user,$password,$db);

     
    mysqli_select_db($conn, $db);

    
    $insert="INSERT into registration_for_open values('$Name','$Address','$gmail','$phone','$age','$Weight','$Height','$Companion')";
    
    $result= mysqli_query($conn, $insert);

    if($result){

      echo'<a href="Pay.html"style="color:white;text-decoration:none;position:absolute;transform:translate(-50%, -50%);left:50%;top:50vh;font-size:40px;background-color:#2ecc71;padding:20px;border-radius:15px;">Click Here To Pay And Complete Your Process</a>';
        
    }else{

      echo("Not Done");

    }
    
  mysqli_close($conn);

};

?>