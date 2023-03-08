const app = new (function () {
    this.botoes = document.getElementById('barra_botoes')
    this.info = document.getElementById('barra_info')
    this.produtos = document.getElementById('produtos')
    this.onLoad = () => {
        
        if (JSON.parse(window.localStorage.getItem("conta"))) {
            let conta = JSON.parse(window.localStorage.getItem("conta"))
            document.getElementById('nome_usuario').innerHTML += ''
            document.getElementById('nome_usuario').innerHTML += conta[0].nm_nome;
        }
    }

    this.sair = () => {

    }
    
    this.mostrarProdutos = () => {
        fetch("../controller/mostrarProdutos.php")
        .then((res) => res.json())
        .then((data) => {
            console.log(data);
            this.produtos.innerHTML = "";
            data.forEach((e) => {
                this.produtos.innerHTML += `
                <div class="card">
                <img height="400px" src="../../public/imagens/shapes.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>${e.nm_nome}</b></h4> 
                    <p>${e.descricao}</p> 
                    <p>${e.preco}</p> 
                </div>
                <button onclick="app.comprar(${e.id_produto})">Comprar produto</button>
                </div>
              `;
            });
        }).catch((error) => {
            console.log(error)
        })
    }

    this.comprar = (id) => {
        const date = new Date();
        let formatDate = `${date.getFullYear()}-${date.getMonth() + 1}-${date.getDate()} ${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`
        var form = new FormData();
        form.append("id_produto", id);
        form.append("id_usuario", JSON.parse(window.localStorage.getItem("conta"))[0].id_usuario);
        form.append("dt_compra", formatDate)
        fetch("../controller/comprar.php", {
            method: "POST",
            body: form
        })
        .then((res) => res.json())
        .then((data) => {
            alert('Compra feita com sucesso!!')
            console.log(data);
        }).catch((error) => {
            console.log(error);
        })

    }

    this.irLogin = () => {
        window.location.href = "../views/login.php"
        
    }
    this.irCadastro = () => {
        window.location.href = "../views/cadastro.php"
    }

    this.irCompras = () => {
        window.location.href = "../views/compras.php"
    }
})();
app.onLoad()
app.mostrarProdutos()
//app.onLoad()