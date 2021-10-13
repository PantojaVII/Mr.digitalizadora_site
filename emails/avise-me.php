<?php
 
@$impressora = $_POST['impressora'];
@$nome = $_POST['nome'];
@$telefone= $_POST['telefone'];
if (empty($impressora) or empty($nome) or empty($telefone)) {
    header('Location: erro.php');
    exit;
}else{

    $assunto ="Avise-me de scanner quando disponível";
    $mensagem= "
                Impressora: " .$impressora."
                Cliente: " .$nome. "
                telefone: " .$telefone."
                ";
    $to = "Comercial@mrdigitalizadora.com.br";
    mail($to,$assunto,$mensagem);
    header('Location: confirm.php');
    }

 
?>

