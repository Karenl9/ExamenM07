<?php
    /*
        RA4.4 - CONTROLAR ACCÉS A LA PANTALLA AMB LA SESSIÓ (1 punt)

        Controlar si el login és true o false.
        En cas de ser false, redireccionam a la pantalla index.html
    */
    session_start();

    if(isset($_SESSION["loggedIn"])){
        if(!$_SESSION["loggedIn"]){
            header("Location: index.html");
            exit(); // Asegúrate de detener la ejecución después de la redirección
        }  
    }
    else{
        header("Location: index.html");
        exit(); // Asegúrate de detener la ejecución después de la redirección
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat</title>
</head>
<body>

    <!-- <h1>Hola,  echo $_SESSION["llistaUsusaris"]; ?></h1>   -->

    <?php
        
        /*
        RA4.3 - MOSTRAR VALORS SESSIÓ PER PANTALLA(1 punt)

        Mostrar el nom a la linia superior: <h1>Hola, nom_Sessio</h1>

        Segons si el valor de la variable de sessio condicio és true o false:
            Mostrar: "Has acceptat les condicions d'ús" o 
            "No has acceptat les condicions d'ús"
        */

        echo "<h1>Hola " . $_SESSION["llistaUsusaris"] ."</h1>";

        if ($_SESSION['loggedIn'] == true){
            echo "Has acceptat les condicions d'ús";
        } else {
            echo "No has acceptat les condicions d'ús";
        }
    ?>

    <br>
    <br>
    <a href="index.html">Tornar</a>
</body>
</html>

