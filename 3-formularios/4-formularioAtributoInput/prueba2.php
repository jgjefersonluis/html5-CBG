<?php
   $user = $_GET["dato1"];
   $clave = $_GET["dato2"];

   $pagina = "<h1>Dato enviado desde el formulario</h1>
               <h2>Tu selección ha sido:</h2>
               <p>$user</p>
               <h3>y la clave es:</h3>
               <p>$clave</p>";
    echo $pagina;            
?>