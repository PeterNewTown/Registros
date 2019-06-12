<?php
$host= 'meu.host.com.br';
$bd= 'meu BD';
$userbd =  'Meu User'; 
$senhabd= 'Minha senha';

$nome	= $_POST ["txt11"];	
$cpf	= $_POST ["cpf"];	
$cargo	= $_POST ["select"];	
$datanasc	= $_POST ["data"];	
$crm	= $_POST ["fd"];	
$ddd	= $_POST ["fix"];	
$tel	= $_POST ["telefone"];
$dddd	= $_POST ["fixs"];	
$celular = $_POST ["Celular"];	
$email	= $_POST ["email"];	
$sexo	= $_POST ["sexo"];	
$senha	= $_POST ["senha"];	
$csenha = $_POST ["csenha"];	

$conexao = mysql_connect($host,$bd, $userbd, $senhabd);
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());

$banco = mysql_select_db($bd,$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
 
mysql_query($query,$conexao);

$query = "INSERT INTO `clientes` ( `nome` , `cpf` , `cargo` , `datanasc` , `crm` , `ddd` , `telefone` , `ddd` , `celular` , `email` , `sexo` , `senha` , `consenha`  ) 
VALUES ('$txt11', '$cpf', '$select', '$data', '$fd', '$fix', '$telefone', '$fixs', '$Celular', '$email', '$sexo', '$senha', '$csenha')";

echo "Seu cadastro foi realizado com sucesso!<br>Só para reiterar, o cadastro NÃO LHE DÁ A GARANTIA de recebimento de aparelhos ou equipamentos, Agradecemos a atenção.";
?>
