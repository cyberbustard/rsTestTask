$(document).ready(function (){
   $(".login").click(function (){
           $('#popup1').show();
           $('.overlay_popup').show();
       })
       $('.overlay_popup').click(function() {
           // $('.overlay_popup, .popup').hide();
       });






        var card_price = 0;
        var iter = 0;
        $('.buy--item').click(function (){

            iter++;

            var price =  $(this).attr("data-price");
            card_price += parseInt(price,10);

            $(".totalPrice").text(card_price+" грн");
            $('.productsCount').text(iter);



        });







   });






