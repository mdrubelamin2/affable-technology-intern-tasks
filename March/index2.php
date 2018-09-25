<header style="color: #ff0000">
	
</header><!-- /header -->>
<?php

$unit=160;
$electric_bill=0;
$vat=0;
echo "Your unit : $unit <br>";
if($unit>0 && $unit<=50){
	$electric_bill=$unit*0.50;
	echo "Amount : $electric_bill<br>";
	$vat=$electric_bill/100*20;
	echo "Vat 20% : $vat<br>";
	$amount=$electric_bill+$vat;
	echo "Amount with Vat : $amount";
}
else if($unit>50 && $unit<=150){
	$tem=$unit-50;
	$electric_bill=($tem*0.75+(50*.50));
	echo "Amount : $electric_bill<br>";
	$vat=$electric_bill/100*20;
	echo "Vat 20% : $vat<br>";
	$amount=$electric_bill+$vat;
	echo "Amount with Vat : $amount";
}
else if($unit>150 && $unit<=250){
	$tem=$unit-150;
	$electric_bill=($tem*1.20+(100*.75+(50*.50)));
	echo "Amount : $electric_bill<br>";
	$vat=$electric_bill/100*20;
	echo "Vat 20% : $vat<br>";
	$amount=$electric_bill+$vat;
	echo "Amount with Vat : $amount";
}
else if($unit>250){
	$tem=$unit-250;
	$electric_bill=$tem*1.50+100*1.20+100*.75+50*.50;
	echo "Amount : $electric_bill<br>";
	$vat=$electric_bill/100*20;
	echo "Vat 20% : $vat<br>";
	$amount=$electric_bill+$vat;
	echo "Amount with Vat : $amount";
}
else{
	echo "Wrong Input";
}
