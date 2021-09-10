<?php
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"vesit sports");
$result=mysqli_query($con,"select date,classA,classB,game,time,category from schedule");

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
