<?php

    /*
        RA3.2 - RECUPERAR INFORMACIÓ FORMULARI (1 punt)

        Recuperar els 3 valors (usuari, edat, condicions) del formulari de la pàgina index.html
        Controleu que les variables no siguin null i estiguin definides.
    */
    
    //controlem que s'hagi informat l'usuari.
    if($user){ 
         /*
            RA3.3 - ARRAY (3 punts)

            Buscar si l'usuari existeix a l'array $llistaUsusaris.
            L'array està al fitxer variables.php
        */

        //SI TROBEM UN USUARI
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

        //SI NO TROBEM USUARI
            /*
                RA4.2 - DESTRUIR SESSIÓ  (1 punt)
                Destrurir la sessio
            */

            /*
                Mostrar index.php i mostrar per pantalla "Usuari no trobat";
            */
    }
    else{
        /*
            Mostrar index.php i mostrar per pantalla "No has informat cap valor";
        */
    }

?>