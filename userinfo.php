<?php




$con =mysqli_connect('localhost','root','Samarthh@77');

if($con){
    echo"connection successful";
}else{
    echo"no connection";
}

mysqli_select_db($con,'websiteuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query="insert into userinfodata (user, email, mobile, comment)
values('$user', '$email', '$mobile', '$comments' )" ;

mysqli_query($con, $query);
 header('location:index.php');

?>
