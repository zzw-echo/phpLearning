<?php
echo "<table style='width: 500px; border: 1px;border-collapse: collapse;'>";
for ($i=0;$i<10;$i++) {
    if ($i % 2 != 0) {
        echo "<tr bgcolor='red'>";
    } else {
        echo "<tr bgcolor='green'>";
    }
    for ($j = 0; $j < 10; $j++) {
//        echo "<td style='border: 1px solid black';>";
        echo "<td>";
        echo $i.$j;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
//测试不过，日后再解决