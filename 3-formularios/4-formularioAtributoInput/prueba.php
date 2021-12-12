<?php
   $valor = $_POST["message"];
   $pagina = "<h1>Dato enviado desde el formulario</h1>
               <h2>Tu selección ha sido:</h2>
               <p>$valor</p>";
    echo $pagina;            
?>