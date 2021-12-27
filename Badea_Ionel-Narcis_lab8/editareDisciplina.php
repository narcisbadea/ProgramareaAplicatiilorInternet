<?php
//preluare parametri transmisi din link cu metoda GET
$codDisciplina=$_GET['codDisciplina'];
$Disciplina=$_GET['Disciplina'];
$An_studiu=$_GET['An_studiu'];
?>
<!-- afisare formular in care utilizatorul are posibilitatea de a
edita informatiile aferente studentului -->
<!--datele din formular sunt transmise cu metoda POST, catre scriptul
editareStudenti_Final.php -->
<center><h1>Formular de editare</h1></center>
<form method="POST" action="http://localhost/L8/editareDisciplina_Final.php">
    <!-- transfer (ascuns) spre script a parametrului de cautare -->
    <input type="hidden" name="codDisciplina_form" value="<?php echo $codDisciplina;?>">
    <!-- transfer spre script ca parametrii a datelor care pot fi modificate -->
    <table align="center" border="1" bgcolor="#999999">
        <tr>
            <td>Cod disciplina:</td>
            <td><input type="text" name="codDisciplina_form" value="<?php echo $codDisciplina;?>"></td>
        </tr>
        <tr>
            <td>Disciplina:</td>
            <td><input type="text" name="Disciplina_form" value="<?php echo $Disciplina;?>"></td>
        </tr>
        <tr>
            <td>An de studiu:</td>
            <td><input type="text" name="An_studiu_form" value="<?php echo $An_studiu; ?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="SUBMIT" value="Modifica" >
            </td>
        </tr>
    </table>
</form>