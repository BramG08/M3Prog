
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$stoplichtKleur = 'G';
if($stoplichtKleur == 'G')
{
 echo " <button style='background-color:#008000;height:25px;width:25px;'/>";
 echo $stoplichtKleur;
}
else if($stoplichtKleur == 'O')
{
 echo " <button style='background-color:#FFA500;height:25px;width:25px;'/>";
 echo $stoplichtKleur;
}
else
{
 echo " <button style='background-color:#FF0000;height:25px;width:25px;'/>";
  echo $stoplichtKleur;
}
?>
</body>
</html>