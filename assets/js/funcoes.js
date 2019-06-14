function formataIP(c){
    if(c.value.length ==3){
        c.value += '.';
    }
    if(c.value.length==7){
        c.value += '.'; 
    }
    if(c.value.length==11){
        c.value += '.'; 
    }
}

function formataMAC(c){
    if(c.value.length ==2){
        c.value += ':';
    }
    if(c.value.length==5){
        c.value += ':'; 
    }
    if(c.value.length==8){
        c.value += ':'; 
    }
    if(c.value.length==11){
        c.value += ':'; 
    }
    if(c.value.length==14){
        c.value += ':'; 
    }
}

function versenha(c){
    var contador = document.getElementById('idContador').value;
    
    
    var button = document.getElementById("idVerSenha").value;
    if (button == 0) {
    for (var i = 1; i <= contador; i++) {
        document.getElementById('idSenha'+i).setAttribute('type', 'text');
        document.getElementById('idVerSenha').setAttribute('class', 'form-control btn-danger');
        document.getElementById("idVerSenha").value = 1;
        var texto = "Esconder";
    }
    }
    if (button == 1) {
        for (var i = 1; i <= contador; i++) {
        document.getElementById('idSenha'+i).setAttribute('type', 'password');
        document.getElementById('idVerSenha').setAttribute('class', 'form-control btn-info');
        document.getElementById("idVerSenha").value = 0;
        var texto = "Ver";
    }
    }
    document.getElementById("labelTotal").innerHTML =texto;

}

function validasenha(s){
    var senha1 = document.getElementById('Senha').value;
    var senha2 = document.getElementById('Confirmar').value;
    
    if (senha1 != senha2) {
        alert("Senhas não conferem")
        document.getElementById('Senha').value = null;
        document.getElementById('Confirmar').value = null;
    }
}