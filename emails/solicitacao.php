<?php 
@$nome = $_POST['nome'];
@$email= $_POST['email'];
@$cliente= $_POST['cliente'];
@$mensagem= $_POST['mensagem'];


if (empty($nome) or empty($mensagem)) {
   header('Location: erro.php');
 }else{
 $to = "Comercial@mrdigitalizadora.com.br";
 $assunto = "Mensagem de ".$cliente. ", Solicitação de documento(s)". $mensagem;
 mail($to,$email,$assunto);
 header('Location: confirm.php');
}
?>