<?php

$con=mysqli_connect("localhost","root","", "facultate") or die ("Nu se poate conecta la serverul MySQL");

$nume_disciplina=$_POST['nume_disciplina_form'];

//se verifica daca studentul care se doreste a fi sters exista in baza de date
//daca nu exista, se afiseaza un mesaj de eroare, daca exista se sterge inregistrarea aferenta
//lui
$query=mysqli_query($con, "select count(*) from discipline where Disciplina= '$nume_disciplina'");
$row=mysqli_fetch_row($query);
$nr=$row[0];
if ($nr!=0){
    // stergere pe baza numelui si prenumelui 
    $query1=mysqli_query($con,"delete from discipline where Disciplina=
    '$nume_disciplina'") or die ("Stergerea nu a putut avea loc!". mysqli_error($con));
    echo"<center>";
    echo "Disciplina a fost stearsa cu succes!";
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