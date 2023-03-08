const app = new  (function () {
    this.titulo = document.getElementById('titulo')

    this.mostrarCompras = () => {
        this.titulo.innerHTML += 'Suas compras, ' + JSON.parse(window.localStorage.getItem("conta"))[0].nm_nome
        this.compras = document.getElementById('compras')
        fetch("../controller/mostrarCompras.php")
        .then((res) => res.json())
        .then((data) => {
            console.log(data);
            this.compras.innerHTML = "";
            data.forEach((e) => {
                for (let i = 0; i < 3; i++) {
                    
                }
                this.compras.innerHTML += `
                <div class="card">
                <img height="400px" src="../../public/imagens/shapes.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>${e.nm_nome}</b></h4> 
                    <p>${e.descricao}</p> 
                    <p>${e.preco}</p> 
                </div>
                </div>
              `;
            });
        }).catch((error) => {
            console.log(error)
        })
    }
})();
app.mostrarCompras()
