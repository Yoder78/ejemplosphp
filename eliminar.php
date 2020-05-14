<?php
include("conexion.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";
    $result=mysqli_query($conn, $query);
    if (!$result){
        die("Falladido");

    }

    $_SESSION['message']='Se a Eliminado';
    $_SESSION['message_type']= 'danger';
    header("Location: crud.php");
}