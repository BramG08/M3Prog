<?php 
$weer = [
    "maandag" => 20,
    "dinsdag" => 11,
    "woensdag"=> 16,
    "donderdag"=> 12,
    "vrijdag"=> 14,
    "zaterdag"=> 16,
    "zondag"=> 18
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>dag</th>
            <th>graden</th>
        </tr>
        <?php foreach($weer as $key => $value){ ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
        <?php } ?>
    </table>
    <? $vandaag = "maandag" ?>
    <p>Vandaag is het <?php echo $vandaag;?> en het is <?php echo $weer["maandag"];?> graden.</p>

    <? $vandaag = "dinsdag" ?>
    <p>Vandaag is het <?php echo $vandaag; ?> en het is <?php echo $weer["dinsdag"]; ?> graden.</p>


    <? $vandaag = "woensdag" ?>
    <p>Vandaag is het <?php echo $vandaag; ?> en het is <?php echo $weer["woensdag"];?> graden.</p>

    <? $vandaag = "donderdag" ?>
    <p>Vandaag is het <?php echo $vandaag; ?> en het is <?php echo $weer["donderdag"]; ?> graden.</p>

    <? $vandaag = "vrijdag" ?>
    <p>Vandaag is het <?php echo $vandaag; ?> en het is <?php echo $weer["vrijdag"]; ?> graden.</p>
</body>
</html>
