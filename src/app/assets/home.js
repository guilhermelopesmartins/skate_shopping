const app = new (function () {
    this.botoes = document.getElementById('botoes')

    this.produtos = document.getElementById('produtos')
    this.onLoad = () => {
        this.botoes.innerHTML = ""
        if (JSON.parse(window.localStorage.getItem("conta"))) {
            let conta = JSON.parse(window.localStorage.getItem("conta"))
            this.botoes.innerHTML += '<button id="botaoSair" onclick="app.sair()">Sair</button>';
            this.botoes.innerHTML += '<button id="botaoCompras" onclick="app.irCompras()">Compras</button>';
            this.botoes.innerHTML += '<button id="botaoConta" onclick="app.irConta()">Conta</button>';
            this.botoes.innerHTML += `<Text class="letra_barra">${conta[0].nm_nome}</Text>`;
        } else {
            this.botoes.innerHTML += '<button id="botaoLogin" onclick="app.irLogin()">Login</button>';
            this.botoes.innerHTML += '<button id="botaoCadastro" onclick="app.irCadastro()">Criar Conta</button>';
        }
    }

    this.sair = () => {
        window.localStorage.removeItem("conta")
        this.onLoad()
    }
    
    this.mostrarProdutos = () => {
        fetch("../controller/mostrarProdutos.php")
        .then((res) => res.json())
        .then((data) => {
            console.log(data);
            this.produtos.innerHTML = "";
            data.forEach((e) => {
                let img = ''
                switch (e.tipo) {
                    case 'shap':
                        img = '../../public/imagens/shapes.jpg'
                        break;
                    case 'truc':
                        img = '../../public/imagens/truck.jpg'
                        break;
                    case 'roda':
                        img = '../../public/imagens/rodinha.jpg'
                        break;

                }
                this.produtos.innerHTML += `
                <div class="card">
                <img height="400px" src=${img} style="width:100%">
                <div class="inside_contener">
                    <h4><b>${e.nm_nome}</b></h4> 
                    <p>${e.descricao}</p> 
                    <p>Valor: R$${e.preco}</p> 
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
        if(!JSON.parse(window.localStorage.getItem("conta"))) {
            alert('Você precisa estar logado para poder comprar qualquer item.')
            return
        }
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

    this.irConta = () => {
        window.location.href = "../views/conta.php"
        
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