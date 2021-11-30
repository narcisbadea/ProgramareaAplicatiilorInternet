<?php
// Secvenţa care se executã la primul apel al scriptului,
// situaţie în care NU a fost încă transmis niciun parametru de la
//formular
if (!isset($_POST['submit_form'])){
?>
<form method="POST" action="http://localhost/L8/inserareDisciplina.php">
    <table border="3" align="center" BGCOLOR="Silver">
        <tr>
            <td>Cod disciplna:</td>
            <td><input type="text" name="codDisciplina_form"></td>
        </tr>
        <tr>
            <td>Disciplina:</td>
            <td><input type="text" name="Disciplina_form"></td>
        </tr>
        <tr>
            <td>An studiu:</td>
            <td>
                <select name="An_Studiu_form">
                    <option value="1">An 1</option>
                    <option value="2">An 2</option>
                    <option value="3">An 3</option>
                    <option value="4">An 4</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="SUBMIT" name="submit_form" value="Add">
                <input type="RESET" value="Reset">
            </td>
        </tr>
    </table>
</form>
<?php
}
// Secvenţa care se executã după furnizarea parametrilor necesari
//inserarii
//(autoapelare)
else{
    $con=mysqli_connect("localhost","root","", "facultate") or die ("Nu se poate conecta la serverul MySQL");
    $codDisciplina=$_POST['codDisciplina_form'];
    $Disciplina=$_POST['Disciplina_form'];
    $An_Studiu=$_POST['An_Studiu_form'];
    //se verifica daca studentul care se doreste sa se insereze nu exista
    //deja in baza de date
    //daca nu exista, se insereaza; daca exista, se afiseaza un mesaj de
    //eroare
    $query=mysqli_query($con, "select count(*) from discipline where codDisciplina='$codDisciplina'");
    $row=mysqli_fetch_row($query);
    $nr=$row[0];
    if ($nr==0){
        // adăugare cu parametri
        $query1=mysqli_query($con,"insert into discipline values('$codDisciplina','$Disciplina','$An_Studiu')") or die ("Inserarea nu a putut avea loc!". mysqli_error($con));
        mysqli_close($con);
        header ("Location: afisareDiscipline.php");
    }
    else{
        echo"<center>";
        echo "Disciplina respectiva exista deja in baza de date!";
        echo"</center>";
    }
}
?>