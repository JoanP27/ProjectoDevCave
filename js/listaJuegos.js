let juegos = [];

window.addEventListener('load', function(){
    let resultadosContenedor = this.document.getElementById("resultados");
    let resultados = resultadosContenedor.children;
    let datos;
    let juegos = [];
    for(i=0; i<resultados.length; i++)
    {
        datos = resultados[i].children;
        juegos[i] = 
        {
            id: datos[0].innerText,
            titulo: datos[1].innerText,
            descripcion: datos[2].innerText,
            categoria: datos[3].innerText,
            precio: datos[4].innerText,
            imagen: datos[5].innerText,
        }
        console.log(juegos)
    }
    resultadosContenedor.innerHTML = "";
    
    for (i=0; i<juegos.length; i++)
    {
        let juego = this.document.createElement("article");

        juego.id = juegos[i].id;
        juego.className = "juego";
        
        let imagen = this.document.createElement("div");
        imagen.style = "background-image: url('"+ juegos[i].imagen +"')";
        imagen.id = "imagen";
        juego.appendChild(imagen);

        let titulo = this.document.createElement("h4");
        titulo.innerText = juegos[i].titulo;
        juego.appendChild(titulo);

        let descripcion = this.document.createElement("p");
        descripcion.innerText = juegos[i].descripcion.substr(0, 20) + "...";
        juego.appendChild(descripcion);

        let contenedorBoton = this.document.createElement("div");
        contenedorBoton.className = "contenedorBoton";

        let precio = this.document.createElement("span");
        precio.innerText = juegos[i].precio + "€";
        contenedorBoton.appendChild(precio);
        
        let boton = this.document.createElement("a");
        boton.href = "../paginas/detalles.php?id=" + juegos[i].id;
        boton.innerText = "Ver";
        contenedorBoton.appendChild(boton);
        juego.appendChild(contenedorBoton)

        resultadosContenedor.appendChild(juego);
    }

    for (i=0; i<resultados.length; i++)
    {
        resultados[i].addEventListener("mouseenter", function()
        {
            var body = document.body
            var container = document.createElement("div")
            var content = document.createElement("p")

            var descripcion = ""
            var categoria = ""

            container.classList.add("popUp")
            container.appendChild(content)
            this.appendChild(container)
            for(i=0;i<juegos.length;i++)
            {
                if (juegos[i].id == this.id)
                {
                    descripcion = juegos[i].descripcion.substring(0, 90) + "...";
                    categoria = juegos[i].categoria;
                    precio = juegos[i].precio + "€";
                }
            }

            content.innerHTML = "<b>Descripcion: </b> " + descripcion + "<br> <b>Categorias: </b>" + categoria +
            "<br><b> Precio:</b> " + precio
        })
        resultados[i].addEventListener("mouseleave", function()
        {
            var popUp = this.getElementsByClassName("popUp")[0]
            this.removeChild(popUp)
        })
    }
})
