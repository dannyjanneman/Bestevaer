<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Boot</title>
</head>
<body>
    <form action="add_ship.php" method="post">
            <label for="naam">Naam:</label>
            <input type="text" name="naam"><br>
            <label for="code">Code:</label>
            <input type="text" name="code"><br>
            <label for="maxGewicht">Max gewicht:</label>
            <input type="text" name="maxGewicht"><br>
            <label for="maxVolume">Max volume:</label>
            <input type="text" name="maxVolume"><br>
            <input type="submit" name="submit" value="submit">
    </form>  
    <?php
        include "save.php";
        $array = $sth->fetchAll();
        foreach($array as $row){
            $naam = $row["naam"];
            $code = $row['code'];
            $gewicht = $row["gewicht"];
            $volume = $row["volume"];
            echo "Naam boot: $naam Code boot: $code Gewicht boot: $gewicht Volume boot: $volume<br>";
        }
    ?>
</body>
</html>