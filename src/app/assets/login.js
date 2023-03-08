const app = new  (function () {
    this.login = document.getElementById('login')
    this.senha = document.getElementById('senha')

    this.loginUsuario = () => {
        var form = new FormData()
        form.append("login", this.login.value)
        form.append("senha", this.senha.value)
        console.log(form)
        fetch("../controller/loginUsuario.php", {
            method: "POST",
            body: form
        })
        .then((res) => res.json())
        .then((data) => {
            console.log(data)
        })
        .catch((error) => {
            alert("Nome de Usuário ou Senha incorreto(s)")
            console.log(error)
        })
    }
})();
