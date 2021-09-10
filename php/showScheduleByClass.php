<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vesit sports";

$choice=$_GET['q'];
$conn = new mysqli($servername, $username, $password, $dbname);
$result=mysqli_query($conn,"SELECT * FROM schedule WHERE (classA='$choice') OR (classB='$choice')");

echo "<table border='1px solid black' >
<tr>
<td align=center> <b>Date</b></td>
<td align=center><b>Class A</b></td>
<td align=center><b>Class B</b></td>
<td align=center><b>Game</b></td>
<td align=center><b>Time</b></td>
<td align=center><b>Category</b></td>
</tr>";

while($data = mysqli_fetch_row($result))
{
  echo "<tr>";
  echo "<td align=center>$data[0]</td>";
  echo "<td align=center>$data[1]</td>";
  echo "<td align=center>$data[2]</td>";
  echo "<td align=center>$data[3]</td>";
  echo "<td align=center>$data[4]</td>";
  echo "<td align=center>$data[5]</td>";
  echo "</tr>";
}
echo "</table>";


 ?>
