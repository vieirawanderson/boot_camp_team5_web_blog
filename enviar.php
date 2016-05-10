<?php
//Variaveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$copia = $_POST['copia'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');


// -------------

$servername = "mysql.hostinger.com.br";
$username = "u593445847_gold1";
$password = "bootcamp2016";
$dbname = "u593445847_gold1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//insert into de table
$sql = "INSERT INTO email (email)
VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();


// Corpo E-mail

	
	$arquivo = "
	<style type='text/css'>
		body {
			margin:0px;
			font-family:Verdane;
			font-size:12px;
			color: #666666;
		}
		a{
			color: #666666;
			text-decoration: none;
		}
		a:hover {
			color: #FF0000;
			text-decoration: none;
		}
	</style>
	<html>
	<head>
		<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	</head>
	Novo contato pelo site!</br></br>
	<table width='510' border='0' cellpadding='1' cellspacing='1'>
		<tr>
			<td>
				<tr>
					<td width='500'>Nome: <b>$nome</b></td>
				</tr>
				<tr>
					<td width='320'>E-mail: <b>$email</b></td>
				</tr>
				<tr>
					<td width='320'>Telefone:<b> $telefone</b></td>
				</tr>
			</td>
		</tr>  
		<tr>
			<td>Este e-mail foi enviado em <b>$data_envio</b> &agrave;s <b>$hora_envio</b></td>
		</tr>
	</table>
	</html>
	";

// -------------------------

//enviar
	$quebra_linha = "\n";
	// emails para quem será enviado o formulário
	$emailsender = "gerenciamentodeclientes@gmail.com";
	$destino = "tiagof7@yahoo.com.br";
	$assunto = "Novo contato pelo site";

	// É necessário indicar que o formato do e-mail é html
	$headers  = "MIME-Version: 1.1" . "\n";
	$headers .= "Content-type: text/html; charset=utf-8" . "\n";
	$headers .= "From: Gold  <gerenciamentodeclientes@gmail.com>\n";
	//if ($copia) {
		//$headers .= "Bcc: tiagof7@yahoo.com.br\n";
	// }
	//$headers .= "Bcc: $EmailPadrao\r\n";
	
	//METODO ANTIGO - FUNCIONA NO HOSTINGER
	$enviaremail = mail($destino, $assunto, $arquivo, $headers);
	if($enviaremail){
		$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
		echo " <meta http-equiv='refresh' content='3;URL=index.html'>";
	} else {
		$mgm = "ERRO AO ENVIAR E-MAIL!";
		echo "";
	}

	header("Location: http://gerenciandomeusclientes.com.br");
    exit;

?>
