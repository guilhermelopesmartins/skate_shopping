const app = new  (function () {
    this.titulo = document.getElementById('titulo')
    this.nome_usuario = document.getElementById('nome_usuario')

    this.onLoad = () => {
        let nome = JSON.parse(window.localStorage.getItem("conta"))[0].nm_nome
        document.getElementById('nome_usuario').innerHTML += ''
        document.getElementById('nome_usuario').innerHTML += nome;
    }

    this.sair = () => {
        window.localStorage.removeItem("conta")
        window.location.href = "../views/home.php"
    }

    this.irHome = () => {
        window.location.href = "../views/home.php"
    }
    this.mostrarCompras = () => {
        this.titulo.innerHTML += 'Suas compras, ' + JSON.parse(window.localStorage.getItem("conta"))[0].nm_nome
        this.compras = document.getElementById('compras')
        let form= new FormData()
        form.append("id", JSON.parse(window.localStorage.getItem("conta"))[0].id_usuario)
        fetch("../controller/mostrarCompras.php", {
            method: "POST",
            body: form
        })
        .then((res) => res.json())
        .then((data) => {
            console.log(data);
            this.compras.innerHTML = "";
            data.forEach((e) => {
                let img = ''
                switch (e.tipo) {
                    case 'shap':
                        img = "../../public/imagens/shapes.jpg"
                        break;
                    case 'truc':
                        img = "../../public/imagens/truck.jpg"
                        break;
                    case 'roda':
                        img = "../../public/imagens/rodinha.jpg"
                        break;

                }
                this.compras.innerHTML += `
                <div class="card">
                <img height="400px" src=${img} style="width:100%">
                <div class="inside_contener">
                    <h4><b>${e.nm_nome}</b></h4> 
                    <p>${e.descricao}</p> 
                    <p>Valor: R$${e.preco}</p> 
                </div>
                </div>
              `;
            });
        }).catch((error) => {
            console.log(error)
        })
    }
})();
app.onLoad()
app.mostrarCompras()
