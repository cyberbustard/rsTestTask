
$(document).ready(function (){
    $('.submit').click(function (){
        $("#register_form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },

            },
            messages: {
                name: {
                    required: "Введите Ваш Имя",
                    minlength: "Имя должно быть более 3-х символов"
                },
            },


        });
    });

});
