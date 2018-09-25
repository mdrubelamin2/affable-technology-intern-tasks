<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Electricity Bill</title>

</head>

<body>

    <?php
    
    $units = 160;
    
    if($units <= 50)
    {
        $bill = $units * 0.50;
    }
    else if($units <= 150)
    {
        $bill = 25 + (($units-50) * 0.75);
    }
    else if($units <= 250)
    {
        $bill = 100 + (($units-150) * 1.20);
    }
    else
    {
        $bill = 220 + (($units-250) * 1.50);
    }
    
    $sur_charge = $bill * 0.20;
    $total_bill  = $bill + $sur_charge;
    
    echo "Total Bill is: ".$total_bill;
    
    ?>

</body>

</html>
