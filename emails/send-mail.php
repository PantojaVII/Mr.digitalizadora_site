<?php
$scanner = $_GET['scanner'];
$impressora = $_POST['impressora'];
@$nome = $_POST['nome'];
@$email= $_POST['email'];
@$telefone= $_POST['telefone'];
@$endereco= $_POST['endereco'];
@$qtd= $_POST['qtd'];
@$valor= $_POST['valor'];
if (empty($nome) or empty($email) or empty($telefone) or empty($endereco)) {
   header('Location: erro.php');
   exit;
} 
elseif ($scanner="true") {

 $assunto ="aluguel scanner";
 $mensagem= " Cliente: " .$nome. 
            " Email: " .$email. 
            " telefone: " .$telefone.
            " Endereço: " .$endereco.
            " Scanner: " .$impressora.
            " Quantidade: " .$qtd.
            " Valor Unitário: " .$valor." ";
 $to = "Comercial@mrdigitalizadora.com.br";
 $envio = mail($to,$assunto,$mensagem);
 header('Location: confirm.php');
}
?>    
 