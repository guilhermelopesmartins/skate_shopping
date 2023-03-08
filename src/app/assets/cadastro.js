const app = new  (function () {
    this.nome = document.getElementById('nome')
    this.email = document.getElementById('email')
    this.data_nascimento = document.getElementById('data')
    this.login = document.getElementById('login')
    this.senha = document.getElementById('senha')
    
    this.salvarUsuario = () => {
        var form = new FormData()
        form.append("nome", this.nome.value)
        form.append("data_nascimento", this.data_nascimento.value)
        form.append("login", this.login.value)
        form.append("senha", this.senha.value)
        form.append("email", this.email.value)
        console.log(form)
        fetch("../controller/salvarUsuario.php", {
            method: "POST",
            body: form
        })
        .then((res) => res.json())
        .then((data) => {
            console.log(data)
        })
        .catch((error) => console.log(error))
    }

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
