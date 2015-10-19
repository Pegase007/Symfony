
$(document).ready(function()
{
    //console.log($(".bootstrap-switch"));


    $("#review").on("click", '.bootstrap-switch',function(event) {
        event.preventDefault();

        var elt = $(this).find("input");
        if($(this).hasClass("bootstrap-switch-on")){

            //console.log("off");


            console.log(elt.attr("data-activate"));
            $.ajax({
                type:"GET",
                url:elt.attr("data-activate")

            })

        }
        else
        {

            $.ajax({
                type:"GET",
                url:elt.attr("data-desactivate")

            })
            //console.log("on");

        }







    })
});