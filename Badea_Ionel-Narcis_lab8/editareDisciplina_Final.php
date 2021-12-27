<?php

$con=mysqli_connect("localhost","root","", "facultate") or die ("Nu se poate conecta la serverul MySQL");

//preluare parametri de la formular
$codDisciplina=$_POST['codDisciplina_form'];
$Disciplina=$_POST['Disciplina_form'];
$An_studiu=$_POST['An_studiu_form'];
// modificare efectiva
// afisare mesaj de eroare pentru date incorect introduse (daca sedoreste)
$query =mysqli_query($con, "update discipline set codDisciplina='$codDisciplina',
Disciplina='$Disciplina', An_studiu='$An_studiu' where codDisciplina='$codDisciplina'") 
or die("Modificare esuata!". mysqli_error($con));
mysqli_close ($con);
header ("Location: afisareDiscipline.php");
?>