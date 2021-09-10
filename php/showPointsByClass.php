<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vesit sports";

$choice=$_GET['q'];
$conn = new mysqli($servername, $username, $password, $dbname);
$result=mysqli_query($conn,"select * from spurthitally where class='$choice'");

echo "<table border='1px solid black' >
<tr>
<td align=center><b>Class</b></td>
<td align=center><b>Game</b></td>
<td align=center><b>Points</b></td>
</tr>";

while($data = mysqli_fetch_row($result))
{
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    echo "</tr>";
}
echo "</table>";


 ?>
