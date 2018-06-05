<?php
    //Conectamos con el servidor
    $conection = mysqli_connect('localhost', 'root', '');
    //Verificamos la conexion
    if(!$conection)
    {
      echo "No se pudo conectar con el servidor";
    }
    else
    {
      $database = mysqli_select_db($conection, 'mundial_evento');
      if(!$database)
      {
        echo "No se encontro la base de datos";
      }
    }

    $city = $_POST['city'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO data VALUES ('$city','$name', '$email')";

    $ejecutar = mysqli_query($conection, $sql);
    if(!$ejecutar)
    {
      echo "Tuvimos un error con la base de datos";
    }
    else
    {
      header("Location: ../registrado.html");
    }
?>
