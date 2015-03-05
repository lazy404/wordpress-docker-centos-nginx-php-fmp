<?php
echo "<pre>";
echo getenv('MYSQL_PORT_3306_TCP_ADDR');
echo "</pre>";

$link = mysqli_connect("172.17.0.13:3306","wordpress","Passw0rd","wordpress") or die("Error " . mysqli_error($link));

$query = "SELECT name FROM mytable" or die("Error in the consult.." . mysqli_error($link));

$result = $link->query($query);

var_dump($result);

// phpinfo();

?>