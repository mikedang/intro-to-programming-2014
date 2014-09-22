<?php

for ($i = 0; $i <= 100; $i++) {
  if (0 != $i % 2) {
    echo $i . "<br>";
  }
}

?>

<?php

$rows = 12;
$cols = 12;

echo "<table>";

for ($tr=1;$tr<=$rows;$tr++){

    echo "<tr>";
        for($td=1;$td<=$cols;$td++){
               echo "<td align='center'>".$tr*$td."</td>";
        }
    echo "</tr>";
}

echo "</table>";

?>

<?php

$sum = 0;
$x=1;
$y=10;
for ($i = $x; $i <= $y; $i++) {
  $sum=$sum+$i;
}
echo $sum;


?>
