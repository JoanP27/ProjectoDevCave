document.formularioJuego.addEventListener("submit", function(evento)
{
    let correcto = true;

    let nombre = document.formularioJuego.nombre;
    if(nombre.value == null || nombre.value == "")
    {
        nombre.setCustomValidity("El nombre no puede dejarse en blanco");
        correcto = false;
    }
    else
    {
        nombre.setCustomValidity("");
    }

    let descripcion = document.formularioJuego.descripcion
    if(descripcion.value == null || descripcion.value == "")
    {
        descripcion.setCustomValidity("La descripcion no puede dejarse en blanco");
        correcto = false;
    }
    else
    {
        descripcion.setCustomValidity("")
    }


    if(correcto == false)
    {
        evento.preventDefault();
    }
});

document.formularioJuego.nombre.addEventListener("input", function()
{
    if(nombre.value == null || nombre.value == "")
    {
        nombre.setCustomValidity("El nombre no puede dejarse en blanco");
        correcto = false;
    }
    else
    {
        nombre.setCustomValidity("");
    }
})
document.formularioJuego.descripcion.addEventListener("input", function()
{
    if(descripcion.value == null || descripcion.value == "")
    {
        descripcion.setCustomValidity("El nombre no puede dejarse en blanco");
        correcto = false;
    }
    else
    {
        descripcion.setCustomValidity("");
    }
})
