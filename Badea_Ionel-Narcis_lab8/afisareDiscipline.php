<?php

$con=mysqli_connect("localhost","root","", "facultate") or die ("Nu se poate conecta la serverul MySQL");


$query=mysqli_query($con,"select * from discipline");
$nr=@mysqli_num_rows($query);
if ($nr>0){
    echo "<center>";
    echo "S-au gasit " . $nr . " inregistrari";
    echo"</center>";
    //Genereaza capul de tabel HTML
    echo "<table align='center' border='1'>";
    echo "<tr bgcolor='silver'>";
    $columns = mysqli_num_fields($query);
    for ($i = 0; $i < $columns; $i++){
        $variab = mysqli_fetch_field_direct($query, $i);
        echo "<th>";
        echo $variab->name;
        echo "</th>";
    }
    echo "<th>Actiuni</th>";
    echo "</tr>";
    //extrage linie cu linie, informatiile din setul de date obtinut in urma interogarii
    while ($row = mysqli_fetch_row($query)){
        $contor=0;
        echo" <tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
            $sir[$contor]=$value;
            $contor++;
        }
    $codDisciplina=$sir[0];
    $Disciplina=$sir[1];
    $An_studiu=$sir[2];
    //transmitere de parametri din link, cu metoda GET
    echo "<td>".
    "<a href='editareDisciplina.php?codDisciplina=$codDisciplina&Disciplina=$Disciplina&An_studiu=$An_studiu'>Edit</a>&nbsp;&nbsp;".
    "<a href='stergereDisciplina.php?codDisciplina=$codDisciplina' onclick = 'return askme();'>Delete</a>".
    "</td>";
    echo "</tr>";
    } //se inchide bucla while
    echo "</table>";

} //se inchide structura conditionala if
else
{
    die ("Nu gasesc nici o inregistrare ...");
}
mysqli_close($con);
?> 
<br>
<center>
    <a href="inserareDisciplina.php">Inserare disciplina</a>
</center>
<script language="javascript">
    function askme(){
        var r=confirm('Sunteti sigur ca doriti sa stergeti inregistrarea selectata?');
        if(r==true){
            return href;
        }
        return false;
    }
</script>