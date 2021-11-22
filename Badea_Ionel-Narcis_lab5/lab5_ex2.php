<?php
    $con=mysqli_connect("localhost:3306","root","","magazin") or die ("Nu se poate conecta la serverul MySQL");
    $nume_produs=$_POST['product_name_form'];
    
    $query=mysqli_query($con,"select * from produse where nume_produs='$nume_produs'");
    $nr=@mysqli_num_rows($query);
    if($nr>0)
    {
        echo "<center>";
        echo "S-au gasit " . $nr . " inregistrari";
        echo "</center>";
        echo "<table align='center' border='1' style='border-collapse: collapse'>";
        echo "<tr bgcolor='silver'>";
        echo "<th>id</th>";
        echo "<th>nume_produs</th>";
        echo "<th>pret</th>";
        echo "<th>cantitate</th>";
        echo "<th>pret total</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_row($query))
        {
            echo" <tr>";
            foreach ($row as $value) 
            { 
                echo "<td>$value</td>";
            }
            $totalValue = $row[2] * $row[3];
            echo "<td>$totalValue</td>";
            echo "</tr>";
        }   
    }
    else
        die ("Nu gasesc nici o inregistrare ...");
    mysqli_close($con);
?> 