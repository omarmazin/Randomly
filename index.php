<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randomly</title>
</head>
<body>
<?php
$Anames = array("Omar", "Mohannad", "Mohammed", "Mazin" , " Saleh");
$Rnames = array_rand($Anames , 2);
$Rdone = $Anames[$Rnames[0]];
$Rage = (rand(16 , 50));
$Astreet = array("Riyadh AD'Dammam highway road" , "Riyadh Al-Qassim highway road" , "Al-Qassim Al-Madinah road" , "Makkah  Jeddah highway road" , "Jeddah AL-Madinah highway road");
$ASstreet = array_rand($Astreet , 2);
$ASDONE = $Astreet[$ASstreet[0]];
$Birth = array("January" , "February" , "March" );
$Bbirth = array_rand($Birth , 2);
$BbDone = $Birth[$Bbirth[0]];
$Year = (rand(1950 , 2004));
$day = (rand(1,30));
$main = array("Name : "=>$Rdone , "Age : "=>$Rage ,"Year : "=>$Year,"Month"=>$BbDone," Day : "=>$day, "Street"=>$ASDONE);
echo json_encode($main)
?>
    
</body>
</html>