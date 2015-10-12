console.log("ahhhhh")

$(document).ready(function()
{
    console.log("ready")


    $("#product_detail").on("click",".delete",function(event){
        event.preventDefault();

        if(confirm("Etes-vous sur de vouloir supprimer ce produit?")){

            var elt = $(this);
            //console.log(this)
            $.ajax({
                type:"GET",
                url:elt.attr("href")

            }).done(function () {

                elt.parents('tr').fadeOut('600',function()
                {

                    $(this).remove();
                });

            });

        }

    })


});