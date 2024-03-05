<?php
$con=mysqli_connect('localhost','root', '', 'ee09');
$a=$_POST['nrKaretki'];
$b=$_POST['ratownik1'];
$c=$_POST['ratownik2'];
$d=$_POST['ratownik3'];

$sql = "INSERT INTO `ratownicy`(nrKaretki,ratownik1,ratownik2,ratownik3) values ('$a','$b','$c','$d')";
$zap = mysqli_query($con, $sql);
echo "Do bazy zostało wysłane zapytanie:".$sql;
mysqli_close($con);
?>