function realizaVali(){
    let senha1 = document.getElementById('senhaPrincipal').value
    let senha2 = document.getElementById('confirmSenha').value

    if(senha1 == senha2){
        document.getElementById("formuCadastro").submit()
        alert('Tudo certo')
        return true
    }else{
        alert('As senhas estão diferentes')
        return false
    }
}