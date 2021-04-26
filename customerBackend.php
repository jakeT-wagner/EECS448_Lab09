<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$email = $_POST["email"];
$password = $_POST["password"];
echo("Thank you for making a purchase at gardening.wow! <br><br>RECEIPT-----------<br><br>UserName: " .$email.'<br>');
echo("Password: ".$password. '<br><br>');



$columns = 3;
$column_headers = array("Amt", "Price", "Subtotal");
$row_headers = array("Seeds", "Shovels", "Mulch", "Shipping", "Total");
$prices = array(2, 43, 12);
$amts = array($_POST["seedAmt"], $_POST["shovAmt"], $_POST["mlchAmt"]);
$shippingCost = array(0, 10, 15);
$total = 0;
echo('<h2>' ."Payment Details". '</h2>');
echo('<table>');
echo('<caption>' ."Payment Details". '</caption>');
echo('<tr>');
echo('<td></td>');
for ($i = 0; $i < $columns; $i ++) {
    echo('<th scope = "col">' .$column_headers[$i].'</th>');
}
echo('</tr>');
for ($i = 0; $i < 5; $i ++) {
    echo('<tr>');
    echo('<th scope = "row">'.$row_headers[$i].'</th>');
    if ($i < 3) {
        echo('<td>'.$amts[$i].'</td><td>'.$prices[$i].'</td>'.'<td>'.$amts[$i]*$prices[$i].'</td>');
        $total = $total + $amts[$i]*$prices[$i];
    }
    
    else if ($i == 3) {
        $shipCost = 0;
        
        if ($_POST["shipping"] === "Expedited") {
            $shipCost = 10;
        }
        else if ($_POST["shipping"] === "Rapid") {
            $shipCost = 15;
        }
        
        echo('<td>'."1".'</td><td>'.$shipCost.'</td>'.'<td>'.$shipCost.'</td>');
        $total = $total + $shipCost;
    }
    else if ($i == 4) {
        echo('<td></td><td></td><td>'.$total.'</td>' );
    }
    
    echo('</tr>');
}

echo('<table>');

?>