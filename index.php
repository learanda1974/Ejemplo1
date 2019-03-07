<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        texto sin programacion
        <br>
        <?php
            $saludo="Mundo variable"; // $ Permite definir una variable
            echo "Hola Mundo 2";
            echo "Hola ".$saludo;
            
        ?>
        <br>
        <pre>   <!--permite ver de forma ordena y legible-->
            Variables de Entorno        
            <br>
            <?php
            var_dump($_SERVER)  //permite ver el contenido de una variable
            ?>
        </pre>
    </body>
</html>
