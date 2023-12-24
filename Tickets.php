<?php
$name=$_REQUEST['Name'];
$address=$_REQUEST['Address'];
$gmail=$_REQUEST['gmail'];
$phone=$_REQUEST['phone'];
$age=$_REQUEST['age'];
$Number=$_REQUEST['Of_Tickets'];



if(isset($_POST['btn'])){



$host="localhost";
$user="root";
$pass="";
$db="body_building";

$conn=mysqli_connect($host,$user,$pass,$db);


mysqli_select_db($conn,$db);

$insert="INSERT into tickets values('$name','$address','$gmail','$phone','$age','$Number')";
$final=mysqli_query($conn,$insert);


if($final){
    
    echo'<a href="Pay.html"style="color:white;text-decoration:none;position:absolute;transform:translate(-50%, -50%);left:50%;top:50vh;font-size:40px;background-color:#2ecc71;padding:20px;border-radius:15px;">Click Here To Pay And Complete Your Process</a>';
}
else{
    echo("Faild");
}
};


?>