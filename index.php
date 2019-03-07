<?php
    include 'operaciones.php';
?>
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
        <?php include 'htnml.php'; ?>
        texto sin programacion
        <br>
        <?php
            $saludo="Mundo variable"; // $ Permite definir una variable
            echo "Hola Mundo 2";
            echo "Hola ".$saludo;
            
        ?>
        <?php
         $meses["enero"]="verano";
         $meses["febrero"]="verano";
         $meses["marzo"]="verano/otoño";
         $meses["abril"]="otoño";
         $meses["mayo"]="otoño/invierno";
         $meses["junio"]="invierno";
         $meses["julio"]="invierno";
         $meses["agosto"]="invierno";
         $meses["septiembre"]="invierno/primavera";
         $meses["octubre"]="primavera";
         $meses["noviembre"]="primavera";
         $meses["diciembre"]="primavera/verano";
         
         foreach ($meses as $mes){
             echo $mes;
         }
         
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
