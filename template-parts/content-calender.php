<?php
$month   = date("m");
$year    = date("Y");
$day     = date("d");
$endDate = date("t", mktime(0, 0, 0, $month, $day, $year));

echo '<font face="arial" size="4">';
echo '<table align="center" border="0" cellpadding=5 cellspacing=5 style=""><tr><td align=center>';
echo "Today : " . date("F, d Y ", mktime(0, 0, 0, $month, $day, $year));
echo '</td></tr></table>';
echo '<table align="center" border="0" cellpadding=1 cellspacing=1 style="border:1px solid #CCCCCC">
<tr bgcolor="#EFEFEF">
<td align-center><font color=red>Monday</font></td>
<td align-center>Sunday</td>
<td align-center>Tuesday</td>
<td align-center>Wednesday</td>
<td align-center>Thursday</td>
<td align-center>Friday</td>
<td align-center>Saturday</td>
</tr>';
$s = date("w", mktime(0, 0, 0, $month, 1, $year));
for ($ds = 1; $ds <= $s; $ds++) {
    echo "<td style=\"font-family:arial;color:#B3D9FF\" align=center valign=middle bgcolor=\"#FFFFFF\">
</td>";
}
for ($d = 1; $d <= $endDate; $d++) {
    if (date("w", mktime(0, 0, 0, $month, $d, $year)) == 0) {
        echo "<tr>";
    }
    $fontColor = "#000000";
    if (date("D", mktime(0, 0, 0, $month, $d, $year)) == "Sun") {
        $fontColor = "red";
    }
    echo "<td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
    if (date("w", mktime(0, 0, 0, $month, $d, $year)) == 6) {
        echo "</tr>";
    }
}
echo '</table>';
echo "<p style=\"text-align:center;color:#555;\"><a style=\"text-decoration:none;color:#555;\" href='http://suckittrees.com/'>Suckittrees</a> by <a style=\"text-decoration:none;color:#555;\" href='http://Suckittrees.com'>Suckittrees.com</a></p>"; ?>