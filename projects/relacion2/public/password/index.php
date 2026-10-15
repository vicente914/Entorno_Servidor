<?php
    echo "<h1>Validación de contraseñas</h1>";
  function contrasenaEsRobusta($contrasena){
    return preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9]).{6,15}$/', $contrasena);
  }

  var_dump(contrasenaEsRobusta("Hola_123"));
?>