const app = new (function () {
    this.irLogin = () => {
        console.log('login')
        window.location.href = "../views/login.php"
        
    }
    this.irCadastro = () => {
        console.log('cadastro')
        window.location.href = "../views/cadastro.php"
        
    }
})();