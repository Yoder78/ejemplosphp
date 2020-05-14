<?php
include ("conexion.php");

if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO task(title, description)VALUES('$title', '$description')";
    $resultado = mysqli_query($conn, $query);

    if(!$resultado){
        die("Peticion Fallida");

    }
    $_SESSION['message']= 'Guardado Satisfactorio';
    $_SESSION['message_type']='success';
    
    header("Location: crud.php");
}
?>