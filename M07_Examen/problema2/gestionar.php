<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestió cookies</title>
</head>
<body>
    
    <h1>Gestió de les cookies</h1>

    <?php
    
    /*
        RA3.6 - RECUPERAR INFORMACIÓ GET (1 punt)
        DESC: Obtenir la variable "estat" pel mètode GET
    */

    if (isset($_GET['estat'])) {
        $estat = $_GET['estat'];

        /*
            RA4.6 - CREAR COOKIE (2 punts)
            RA4.7 - DESTRUIR LA COOKIE (1 punt)

            DESC: 
                Si l'estat és 'ok'{
                    crear una cookie 'name' amb el vostre nom i una durada de 2 minuts.
                    mostrar per pantalla "La cookie s'ha guardat";
                }
                Si l'estat és 'denny'{
                    eliminar la cookie.
                    mostrar per pantalla "La cookie s'ha eliminat";
                } 
        */

        if ($estat === 'ok') {
            $nom = 'Karen'; 
            setcookie('name', $nom, time() + (2 * 60)); // Cookie con tu nombre por 2 minutos
            echo "La cookie s'ha guardat";
        } elseif ($estat === 'denny') {
            setcookie('name', 'Karen', time() - 1); // Eliminar la cookie
            echo "La cookie s'ha eliminat";
        } else {
            echo "Estat no reconegut";
        }
    } else {
        echo "No s'ha proporcionat cap estat.";
    }

    ?>
    <br>
    <br>
    <a href="index.php">tornar</a>

</body>
</html>
