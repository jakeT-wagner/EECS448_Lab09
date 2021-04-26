

<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo('<h2>' ."MULTIPLICATION TABLE". '</h2>');
echo('<table>');
echo('<caption>' ."Multiplication Table". '</caption>');
echo('<tr>');
echo('<td></td>');
for ($i = 1; $i < 101; $i ++) {
    echo('<th scope = "col">' .$i.'</th>');
}
echo('</tr>');
for ($i = 1; $i < 101; $i ++) {
    echo('<tr>');
    echo('<th scope = "row">'.$i.'</th>');
    for ($j = 1; $j < 101; $j ++) {
        echo('<td>'.$i*$j.'</td>');
    }
    echo('</tr>');
}
echo('<table>');

?>