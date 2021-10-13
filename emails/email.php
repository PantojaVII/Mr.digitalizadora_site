<?php 
@$nome = $_POST['nome'];
@$email= $_POST['email'];
@$assunto= $_POST['assunto'];
@$mensagem= $_POST['mensagem'];
if (empty($nome) or empty($assunto) or empty($mensagem)) {
   header('Location: erro.php');
 }else{
 $to = "Comercial@mrdigitalizadora.com.br";
 $assunto = "Mensagem de ".$email;
 mail($to,$assunto,$mensagem);
 header('Location: confirm.php');
}
?>