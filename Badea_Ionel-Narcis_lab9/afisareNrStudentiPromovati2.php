<?php

$con=mysqli_connect("localhost","root","", "facultate") or die ("Nu se poate conecta la serverul MySQL");
$query=mysqli_query($con,"select B.disciplina, B.an_studiu, count(*) as nr
                            from discipline B, note C where B.codDisciplina=C.codDisciplina and C.nota>=5
                            group by B.Disciplina
                            having count(*)>=2
                            order by B.Disciplina;");
$nr=@mysqli_num_rows($query);
if ($nr>0){
    echo "<center>";
    echo "S-au gasit " . $nr . " inregistrari";
    echo"</center>";
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
        echo" <tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
    }

}
else
{
    die ("Nu gasesc nici o inregistrare ...");
}
mysqli_close($con);
?> 
