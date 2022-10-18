<?php
require_once('cone.php');

$Usuario=$_POST['Usuario'];
$pass=password_hash($_POST['Contrasena'],PASSWORD_DEFAULT,['cost'=>15]);

echo ($Usuario.'<br>');
echo ($Contrasena.'<br>');

$sql="INSERT INTO Info_De_Usuario (Usuario, Contrasena) VALUES ('$Usuario', '$pass')";

$paquete=mysqli_query($con, $sql);

if (!$paquete) {
    echo '<p> nel </p>';
    echo mysqli_error($con);
}else {
    echo '<p> sip </p>';
    
}


?>