<?php 

function valsenha($senha){

    if(strlen($senha) <8){
        // return false; ou algum "echo"
    }

    if(!preg_match('/[A-Z]/', $senha)){
       // return false; ou algum "echo"
    }

    if(!preg_match('/[a-z]/', $senha)){
        // return false; ou algum "echo"
    }
    if(!preg_match('/[0-9]/', $senha)){
        // return false; ou algum "echo"
    }

    // return true; chamar a próxima pagina.
}
