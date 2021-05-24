<?php
    $conexao = mysqli_connect("localhost", "root", "", "baseteste");
    // recebe valores
    $recebeid=$_GET["id"];
    $recebenome=$_GET["nome"];
    $recebeemail=$_GET["email"];
    $recebemsg=$_GET["msg"];


    mysqli_query($conexao, "INSERT INTO dados (id, nome, email, msg) VALUES ('$recebeid', '$recebenome', '$recebeemail', '$recebemsg')");
    header("location:list_view.php");
?>
