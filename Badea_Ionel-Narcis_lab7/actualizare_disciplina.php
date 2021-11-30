<?php

$con=mysqli_connect("localhost","root","", "facultate") or die ("Nu se poate conecta la serverul MySQL");

$nume=$_POST['nume_disciplina_form'];
$cod=$_POST['cod_disciplina_form'];
$an=$_POST['an_disciplina_form'];
//se verifica daca studentul care se doreste a fi sters exista in baza de date
//daca nu exista, se afiseaza un mesaj de eroare, daca exista se sterge inregistrarea aferenta
//lui
$query=mysqli_query($con, "select count(*) from discipline where codDisciplina= '$cod'");
$row=mysqli_fetch_row($query);
$nr=$row[0];
if ($nr!=0){
    // stergere pe baza numelui si prenumelui 
    $query =mysqli_query($con, "update discipline set Disciplina='$nume',An_Studiu='$an'where codDisciplina='$cod'") or die("Modificare esuata!". mysqli_error($con)); 
    echo"<center>";
    echo "Disciplina a fost modificata cu succes!";
    echo"</center>";
}
else
{
    echo"<center>";
    echo "Disciplina cautata nu exista in baza de date!";
    echo"</center>";
}
mysqli_close($con);
?> 