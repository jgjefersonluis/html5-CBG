<?php
   $user = $_POST["a"];
   $clave = $_POST["b"];

   $pagina = "<h1 style='background:blue;color:white;'>Dato enviado desde el formulario</h1>
               <h2 style='border-style:solid;'>Tu selección ha sido en a:</h2>
               <p style='background:green;color:red;font-size:100px;'>$user</p>
               <h3 style='border-style:solid;'>y en b:</h3>
               <p style='background:green;color:red;font-size:100px;'>$clave</p>";
    echo $pagina;            
?>