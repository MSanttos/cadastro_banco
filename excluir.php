<?php
    include("conexao.php");
    // conecta ao banco de dados
    $recebeid=$_GET["idexcluir"];
    // recebe o ID passado via GET(?)
    mysqli_query($conexao, "DELETE FROM dados WHERE id=$recebeid");
    // executando comando atraves da conexao, deleta da trabela dados o ID cadastrado na tabela seja igual
    // ao ID que eu recebi
    header("location:list_view.php");
    // após execução volta pra list_view.php
?>
