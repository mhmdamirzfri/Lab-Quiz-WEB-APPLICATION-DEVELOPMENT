<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $month = $_POST['month'];
    $salesAmount = $_POST['salesAmount'];

    if ($salesAmount >= 1 && $salesAmount <= 2000) {
        $commissionRate = 3;
    } elseif ($salesAmount >= 2001 && $salesAmount <= 5000) {
        $commissionRate = 4;
    } elseif ($salesAmount >= 5001 && $salesAmount <= 7000) {
        $commissionRate = 7;
    } elseif ($salesAmount > 7000) {
        $commissionRate = 10;
    } else {
        $commissionRate = 0;
    }

    $commission = ($salesAmount * $commissionRate) / 100;

    echo "<h2>Sales Commission</h2>";
    echo "Name: " . $name . "<br>";
    echo "Month: " . $month . "<br>";
    echo "Sales Amount: RM " . number_format($salesAmount, 2) . "<br>";
    echo "Sales Commission: RM " . number_format($commission, 2) . "<br>";
}
?>
