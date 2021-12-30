<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<style>
    table{
        width: 310px;
        border:solid black 2px;
        background-color: silver;
    }
    body{
        background-color: gray;
    }
</style>
<body>
    <?php
        $con=mysqli_connect("localhost","root","", "facultate") or die ("Nu se poate conecta la serverul MySQL");
        $query=mysqli_query($con,"select * from studenti_ac order by An_Studiu, Nume, Prenume");
        $nr=@mysqli_num_rows($query);
        if ($nr>0){
            echo "<h3 align='center'>STUDENTI INREGISTRATI</h3>";
            echo "<table align='center' border='1'>";
            echo "<tr bgcolor='silver'>";
            $columns = mysqli_num_fields($query);
            for ($i = 0; $i < $columns; $i++){
                $variab = mysqli_fetch_field_direct($query, $i);
                echo "<th>";
                echo $variab->name;
                echo "</th>";
            }
            echo "</tr>";
            while ($row = mysqli_fetch_row($query)){
                $contor=0;
                echo" <tr>";
                foreach ($row as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table><br>";
        }
        else
        {
            die ("Nu gasesc nici o inregistrare ...");
        }
        mysqli_close($con);
    ?>
    <form method="POST" action="http://localhost/L9/afisareMaxNoteStudent.php">
        <table align="center">
            <tr>
                <th colspan="2">Afisarea notei maxime a unui student</th>
            </tr>
            <tr>
                <td>Marca student:</td>
                <td>
                    <input type="text" name="marca_student_form">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="SUBMIT" value="Submit" >
                    <input type="RESET" value="Anulare" >
                </td>
            </tr>
        </table>
    </form> 
    <br>

    <form method="POST" action="http://localhost/L9/afisareMinNoteStudent.php">
        <table align="center">
            <tr>
                <th colspan="2">Afisarea notei minime a unui student</th>
            </tr>
            <tr>
                <td>Marca student:</td>
                <td>
                    <input type="text" name="marca_student_form">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="SUBMIT" value="Submit" >
                    <input type="RESET" value="Anulare" >
                </td>
            </tr>
        </table>
    </form> 
    <br>

    <form method="POST" action="http://localhost/L9/afisareNoteStudent.php">
        <table align="center">
            <tr>
                <th colspan="2">Afisarea notelor unui student</th>
            </tr>
            <tr>
                <td>Marca student:</td>
                <td>
                    <input type="text" name="marca_student_form">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="SUBMIT" value="Submit" >
                    <input type="RESET" value="Anulare" >
                </td>
            </tr>
        </table>
    </form> 
    <br>

    <table align="center">
        <tr>
            <td align="center">Afisarea numar studenti cu 10</th>
            <td><a href='/L9/afisareNrStudentiCu10.php'>Afisare</a></th>
        </tr>
        <tr>
            <td align="center">Afisarea numar studenti promovati</td>
            <td><a href='/L9/afisareNrStudentiPromovati.php'>Afisare</a></th>
        </tr>
        <tr >
            <td align="center">Afisarea numar studenti promovati daca sunt mai mult de 2</th>
            <td><a href='/L9/afisareNrStudentiPromovati2.php'>Afisare</a></th>
        </tr>
    </table>
    <br>
</body>
</html>