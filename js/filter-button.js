window.addEventListener('load', function(){
    var boton_filtros = document.getElementById("boton_filtros")
    let filtros_visibles = false
    boton_filtros.addEventListener("click", function(){
        let filtros = document.getElementById("filtros")
        if(filtros_visibles == true)
        {
            filtros.classList.add("not-visible")
            boton_filtros.children[0].classList.remove("fa-caret-up")
            boton_filtros.children[0].classList.add("fa-caret-down")
            filtros_visibles = false
        }
        else
        {
            filtros.classList.remove("not-visible")
            boton_filtros.children[0].classList.remove("fa-caret-down")
            boton_filtros.children[0].classList.add("fa-caret-up")
            filtros_visibles = true
        }
    })
});