var side_button_container = document.getElementById("side-menu-button")
var side_button = side_button_container.getElementsByTagName("button")[0]

var active = false

side_button.addEventListener("click", function()
{
    var aside = document.getElementById("aside-menu")

    console.log(aside.classList)
    if(active == false)
    {
        aside.classList.remove("not-visible")
        active = true;
    }
    else
    {
        aside.classList.add("not-visible")
        active = false;
    }
})