<?php

$con=mysqli_connect("localhost","root","", "facultate") or die ("Nu se poate conecta la serverul MySQL");

//preluare marca transmisa din link cu metoda GET
$codDisciplina=$_GET['codDisciplina'];
$query=mysqli_query($con,"delete from discipline where codDisciplina='$codDisciplina'") or die ("Stergerea nu a putu avea loc!".mysqli_error($con));
mysqli_close($con);
header ("Location: afisareDiscipline.php");
?>