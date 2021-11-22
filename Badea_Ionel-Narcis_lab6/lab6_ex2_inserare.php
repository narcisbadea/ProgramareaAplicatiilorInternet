<?php
$con=mysqli_connect("localhost","root","", "facultate") or die ("Nu se poate conecta la serverul MySQL");
$codDisciplina=$_POST['codDisciplina_form'];
$disciplina=$_POST['disciplina_form'];
$anStudiu=$_POST['anStudiu_form'];
$query=mysqli_query($con, "select count(*) from discipline where Disciplina='$disciplina'");
$row=mysqli_fetch_row($query);
$nr=$row[0];
if ($nr==0){
    $query1=mysqli_query($con,"insert into discipline values('$codDisciplina','$disciplina','$anStudiu')") or die ("Inserarea nu a putut avea loc!". mysqli_error($con));
    echo"<center>";
    echo "Disciplina a fost inserata cu succes!";
    echo"</center>";
}
else{
    echo"<center>";
    echo "Disciplina respectiva exista deja in baza de date!";
    echo"</center>";
}
mysqli_close($con);
require_once('lab6_ex2_afisare.php');
?>