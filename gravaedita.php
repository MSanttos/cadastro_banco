<?php
    include ("conexao.php");

    $recebeid=$_POST["id"]; //recebe id
    $recebenome=$_POST["nome"]; //recebe nome
    $recebeemail=$_POST["email"]; //recebe email
    $recebemsg=$_POST["msg"]; //recebe msg
    
    mysqli_query($conexao, "UPDATE  dados SET id='$recebeid', nome='$recebenome', email='$recebeemail', msg='$recebemsg' WHERE id=$recebeid");
    // atravez da minha conexão faz um update setando o campo nome gravando por cima a variavel nome, email, e msg
    header  ("location:list_view.php");

?>
