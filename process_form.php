<?php
$name = $_POST['name'];
$procedureType = $_POST['procedure_type'];
$numAppointments = $_POST['num_appointments'];
$cost = $_POST['cost'];
$taxRate = $_POST['tax_rate'] / 100;
$totalCost = ($cost * $numAppointments) * (1 + $taxRate);

echo "Client Name: $name<br>";
echo "Procedure Type: $procedureType<br>";
echo "Number of Appointments: $numAppointments<br>";
echo "Total Cost (including tax): $totalCost";
?>
