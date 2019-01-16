

$(function () {


    $(".select2").select2({
        language: 'pt-BR',
        theme: "bootstrap"
    });

     $(document).ready(function(){
            $('#users').select2({
                placeholder : 'Please select user',
                tags: true
            });
        });

});
