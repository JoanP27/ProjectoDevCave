window.addEventListener("load", function(){
    document.getElementById("user_button").addEventListener("click", function(){
        let user_profile_options = document.getElementById("user_profile_options");
        if(user_profile_options.className == "not-visible")
        {
            user_profile_options.className = "";
        }
        else
        {
            user_profile_options.className = "not-visible";
        }
    });
})