<?php
    function conectarse() //funcion para conectarse a la base de datos
        {
            if (!($link=mysql_connect("localhost","root","kaoz58415247!#")))  //conectala base de datos con su respectiva contraseña
                {
                    echo "Error conectado a la base de datos";
                    exit();
                }
            if (!mysql_select_db("alexis",$link))
                {
                    echo "Error seleccion de la base de datos";
                    exit();
                }
            return $link;
         }

     $link=conectarse();

     mysql_close($link); //cierra la base datos 
?>
