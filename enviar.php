<?php

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$celular = addcslashes($_POST['celular']);

$para = "luan-esposito@hotmail.com";
$assunto = "Contato - Portfólio";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

$cabecalho = "From: luan.esposito@hotmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabecalho)){
    echo("E-mail enviado com sucesso!")
}else{
    echo("Houve um erro ao enviar o email!");
}

?>