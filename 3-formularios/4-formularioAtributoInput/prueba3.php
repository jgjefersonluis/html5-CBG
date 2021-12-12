<?php
   $user = $_POST["dato1"];
   $clave = $_POST["dato2"];

   $pagina = "<h1>Dato enviado desde el formulario</h1>
               <h2>Tu selección ha sido:</h2>
               <p>$user</p>
               <h3>y también:</h3>
               <p>$clave</p>";
    echo $pagina;            
?>