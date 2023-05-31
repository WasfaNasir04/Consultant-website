<?php 

$con = mysqli_connect('localhost','root');

if($con){
    echo"Connection Successful";
}else{
    echo"No Connection";
}

mysqli_select_db($con, 'contactus');

$name = $_POST['name'];
$category = $_POST['category'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$query = "insert into userdata (name,category,phone,city,email,comment)
values ('$name','$category','$phone','$city','$email','$comment')";

echo "$query";

mysqli_query($con,$query);

header('location:index.php');

?>