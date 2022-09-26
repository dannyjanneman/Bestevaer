<?php
    include "save.php";
    if(isset($_POST["submit"])) {
        $naam = $_POST["naam"];
        $code = $_POST["code"];
        $gewicht = $_POST["maxGewicht"];
        $volume = $_POST["maxVolume"];
        $statement = "INSERT INTO schepen (naam, code, gewicht, volume) VALUES (:naam, :code, :gewicht, :volume);"; 
        $sth = $db->prepare($statement);
        $sth->execute(array(':naam'=>$naam, ":code"=>$code, ":gewicht"=>$gewicht, ":volume"=>$volume));  
        header("Location: frontpage.php"); 
    }

?>