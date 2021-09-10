<?php
$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"vesit sports");
$result=mysqli_query($con,"SELECT schedule.matchid,schedule.classA,schedule.classB,results.winner FROM schedule,results WHERE results.matchid=schedule.matchid");

echo "<table border='1px solid black' >
<tr>
<td align=center> <b>Match ID</b></td>
<td align=center><b>Class A</b></td>
<td align=center><b>Class B</b></td>
<td align=center><b>Winner</b></td>
</tr>";

while($data = mysqli_fetch_row($result))
{
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    echo "<td align=center>$data[3]</td>";
    echo "</tr>";
}
echo "</table>";
?>
