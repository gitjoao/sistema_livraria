$(function () {

    $(".cepmask").inputmask("99999-999", {"placeholder": "_____-___"});
    $(".cepmask").inputmask("99999-999", {"placeholder": "_____-___"});



$("#cep").change(function (){
    var cep = this.value;
    var url = "http://viacep.com.br/ws/"+cep+"/json";
    var requisicao = new XMLHttpRequest();
    requisicao.onreadystatechange = function(){
        if(this.status == 200 && this.readyState == 4){
            var endereco = JSON.parse(this.responseText);
            preencher_endereco(endereco);
        }
    };

    requisicao.open("GET",url,true);
    requisicao.send();
});

function preencher_endereco(endereco){
    document.getElementById('street').value = endereco.logradouro;
    document.getElementById('neighborhood').value = endereco.bairro;
    document.getElementById('city').value = endereco.localidade;
    document.getElementById('state').value = endereco.uf;
    document.getElementById('number').focus();
}

});
