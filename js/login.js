// alert('error')

function Logar() {
    var name = document.getElementById("name");
    var password = document.getElementById("password");

    console.log(name.value + password.value);

    if (localStorage.getItem("name") == name.value && localStorage.getItem("password") == password.value) {
        localStorage.setItem("acesso", true);
        alert("Seus dados estão sendo carregados!");
        window.location.href = "index.php";
    } else {
        alert("ERRO, usuário inválido ou não está registrado! Acesse Criar conta para ter acesso.");
    }
}