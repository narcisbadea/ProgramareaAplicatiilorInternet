<?php
$con=mysqli_connect("localhost","root","", "facultate") or die ("Nu se poate conecta la serverul MySQL");
$query=mysqli_query($con,"select * from discipline");
$nr=@mysqli_num_rows($query);
if($nr>0)
    {
        echo "<center>";
        echo "S-au gasit " . $nr . " inregistrari";
        echo "</center>";
        echo "<table id='mytable' align='center' border='1' style='border-collapse: collapse'>";
        echo "<tr bgcolor='silver'>";
        echo "<th>Cod disciplina</th>";
        echo "<th>Disciplina</th>";
        echo "<th>An de studiu</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_row($query))
        {
            echo" <tr>";
            foreach ($row as $value) 
            { 
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }   
    }
    else
        die ("Nu gasesc nici o inregistrare ...");
mysqli_close($con);
?>