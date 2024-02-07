function verifierPwd(){
    let pwd=document.getElementById('pwd').value;
    let cpwd=document.getElementById('cpwd').value;
    if(cpwd===pwd){
    return true;
    }
    else{
    document.getElementById('erreur').innerHTML="Mot de passe non confirmé";
    return false;
    }
}

function supprimer(){
    let ok=confirm("vous voulez supprimer !");
    return ok;
}