<?php
session_start();
/*
    RA3.2 - RECUPERAR INFORMACIÓ FORMULARI (1 punt)

    Recuperar els 3 valors (usuari, edat, condicions) del formulari de la pàgina index.html
    Controleu que les variables no siguin null i estiguin definides.
*/
if (isset($_POST['name'], $_POST['edat'], $_POST['active'])) {
    // Recopilar datos del formulario
    $name = $_POST['name'];
    $edat = $_POST['edat'];
    $active = $_POST['active'] ? 1 : 0;

    // controlem que s'hagi informat l'usuari.
    if ($name) {
        /*
            RA3.3 - ARRAY (3 punts)

            Buscar si l'usuari existeix a l'array $llistaUsusaris.
            L'array està al fitxer variables.php
        */
        include 'variables.php'; // Asegúrate de incluir el archivo con el array $llistaUsusaris

        $trobat = false;

        foreach ($llistaUsusaris as $usuari) {
            if ($usuari['name'] == $name) {
                $trobat = true;
                break;
            }
        }

        if ($trobat) {
            $_SESSION["llistaUsusaris"] = $name;
            $_SESSION["loggedIn"] = true;
            $_SESSION["condicions"] = $active;

            /*
                RA4.1 - GUARDAR VALORS EN SESSIÓ (2 punts)

                Guardar en les variables de sessió: 
                    login = true
                    user = valor usuari del formulari
                    condicions = true o false segons el valor del formulari
            */

            /*
                Redireccionem a la pantalla resultat.php
            */
            header("Location: resultat.php");
            exit();
        } else {
            session_destroy();
            header("Location: index.html");
            echo "Usuari no trobat";
        }
        //SI TROBEM UN USUARI
        /*
            RA4.2 - DESTRUIR SESSIÓ  (1 punt)
            Destrurir la sessio
        */
        /*
            Mostrar index.php i mostrar per pantalla "Usuari no trobat";
        */
    } else {
        /*
            Mostrar index.php i mostrar per pantalla "No has informat cap valor";
        */
        header("Location: index.html");
        echo "No has informat cap valor";
    }
}
?>
