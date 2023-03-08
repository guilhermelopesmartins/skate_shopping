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
            if (data.length == 0) {
                alert("Nome de Usuário ou Senha incorreto(s)")
                return    
            }
            window.localStorage.setItem("conta", JSON.stringify(data))
            window.location.href = "../views/home.php"
        })
        .catch((error) => {
            console.log(error)
        })
    }
    this.cancel = () => {
        window.location.href = '../views/home.php'
    }
})();
