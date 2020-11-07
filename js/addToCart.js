$(document).ready(function (){
    $('.buy--item').click(function (){
       var productId = $(this).attr("data-id");
        $.ajax({
            url: 'addToCart.php',
            type: 'POST',
            cache: false,
            data: {'productId' : productId,},
            dataType: 'html',
            success: function(data){
                console.log("done");


            }
        });



    });

});