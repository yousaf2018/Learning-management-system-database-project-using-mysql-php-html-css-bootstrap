<?php 
$connection = mysqli_connect("localhost","root","","learning management system");
if(!$connection){
    die("Connection failed: ". mysqli_connect_error());
}
else{
echo nl2br ("Connection is successfull\n");
$email = $_POST['email'];
$password = $_POST['pwd'];
echo nl2br ($email."\n");
echo nl2br ($password."\n");
$query = "SELECT * FROM admin INNER JOIN admin_login ON admin.Aid = admin_login.Aid AND admin.Email = '$email' INNER JOIN login on login.Log_id = admin_login.Log_id and login.login_password='$password'"; 
//$query = "insert into login values(2,'namal123')";
//$query = "select * from admin_login AL,admin A where AL.Aid=A.Aid and A.Email='$email'";
$result = mysqli_query($connection,$query);
$counter = mysqli_num_rows($result);
if($counter==1){
    
}
echo nl2br ($counter."\n");
$connection->close();
}
?>
Hi i am using php for scripting language