<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $_unit = (int) $_POST['units'];
    $_rate = (int) $_POST['rate'];

    $total = $_unit * $_rate;

    echo "<h1>Electricity Bill: ₹$total</h1>";
}
?>
