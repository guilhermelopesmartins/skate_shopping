const app = new  (function () {
    let conta = JSON.parse(window.localStorage.getItem("conta"))[0]

    this.nome = document.getElementById('nome')
    this.email = document.getElementById('email')
    this.data_nascimento = document.getElementById('data')
    this.login = document.getElementById('login')
    this.senha = document.getElementById('senha')

    this.onLoad = () => {
        document.getElementById('nome').value = conta.nm_nome
        document.getElementById('data').value = conta.dt_nascimento
        document.getElementById('email').value = conta.email
        document.getElementById('login').value = conta.nm_login
        document.getElementById('senha').value = conta.senha
    }

    this.excluirConta = () => {
        let form = new FormData()
        form.append('id', conta.id_usuario)
        fetch("../controller/excluirUsuario.php", {
            method: "POST",
            body: form
        })
        .then((res) => res.json())
        .then((data) => {
            window.localStorage.removeItem("conta")
            alert('Usuário excluido com sucesso!')
            window.location.href = '../views/home.php'
        })
        .catch()
    }
    this.cancel = () => {
        window.location.href = '../views/home.php'
    }

    this.alterarConta = () => {
        var form = new FormData()
        form.append("nome", this.nome.value)
        form.append("data_nascimento", this.data_nascimento.value)
        form.append("login", this.login.value)
        form.append("senha", this.senha.value)
        form.append("email", this.email.value)
        form.append("id", conta.id_usuario)
        console.log(form)
        fetch("../controller/alterarUsuario.php", {
            method: "POST",
            body: form
        })
        .then((res) => res.json())
        .then((data) => {
            window.location.href = '../views/login.php'
        })
        .catch((error) => {
            console.log(error)
            alert('Não foi possível alterar dados.')
        })
    }
    // this.nome = document.getElementById('nome')
    // this.email = document.getElementById('email')
    // this.data_nascimento = document.getElementById('data')
    // this.login = document.getElementById('login')
    // this.senha = document.getElementById('senha')
    
    // this.salvarUsuario = () => {
    //     var form = new FormData()
    //     form.append("nome", this.nome.value)
    //     form.append("data_nascimento", this.data_nascimento.value)
    //     form.append("login", this.login.value)
    //     form.append("senha", this.senha.value)
    //     form.append("email", this.email.value)
    //     console.log(form)
    //     fetch("../controller/salvarUsuario.php", {
    //         method: "POST",
    //         body: form
    //     })
    //     .then((res) => res.json())
    //     .then((data) => {
    //         window.location.href = '../app/views/login.php'
    //     })
    //     .catch((error) => {
    //         console.log(error)
    //         alert('Não foi possível fazer cadastro.')
    //     })
    // }
    this.cancel = () => {
        window.location.href = '../views/home.php'
    }
})();
app.onLoad()