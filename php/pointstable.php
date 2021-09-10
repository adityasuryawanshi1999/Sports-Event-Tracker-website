<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vesit sports";

$conn = new mysqli($servername, $username, $password, $dbname);
$result=mysqli_query($conn,"select * from pointstable order by points desc");

echo "<table border='1px solid black' >
<tr>
<td align=center> <b>Class</b></td>
<td align=center><b>Points</b></td>
</tr>";

while($data = mysqli_fetch_row($result))
{
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "</tr>";
}
echo "</table>";


 ?>
