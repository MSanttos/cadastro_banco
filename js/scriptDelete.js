// js document Delete
function verifica(recebeid) {
    /*recebe o ID*/
    if (confirm("Tem certeza que deseja EXCLUIR este CADASTRO?")) {
        /*se for verdeda ele redireciona para o "excluir" e via GET(?) 
        mando a variável  idExcluir que pode ser excluido */
        window.location = "excluir.php?idexcluir=" + recebeid
    }
}