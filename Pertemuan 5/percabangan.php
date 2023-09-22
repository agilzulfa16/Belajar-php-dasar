<?php
    $teman = "budi";

    //IF ELSE
    // if($teman == "andi"){
    //     echo "Dia teman saya <br>";
    // } else{
    //     echo "Dia Bukan teman saya <br>";
    // }

    // //IF-ELSEIF-ELSE
    // if($teman == "Budi"){
    //     echo "Budi adalah teman saya";
    // }elseif($teman == "Andi"){
    //     echo "Andi adalah teman saya";
    // }else{
    //     echo "bukan teman saya";
    // }

    $color = "blue";
    switch($color){
        case "red":
            echo "your favourite color is red";
            break;
        case "blue":
            echo "your favourite color is blue";
            break;
        case "violet":
            echo "your favourite color is violet";
            break;
        case "ungu":
            echo "your favourite color is ungu";
            break;
        default:
        echo "you don't have fucking taste";
    }
    

?>