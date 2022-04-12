<?php
	
$servername = "localhost";
$username = "u228666546_cavalcante";
$password = "xr?GloW7I+";
$dbname = "u228666546_cavalcante";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

	$nome = $_POST['nome'];
	$data = $_POST['data'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$endereco = $_POST['endereco'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	


$sql = "INSERT INTO clientes (nome,data,rg,cpf,endereco,telefone,email) VALUES ('$nome','$data','$rg','$cpf','$endereco','$telefone','$email')";


$inserir = mysqli_query($conn, $sql);

?>
<!--CSS-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 600px; margin-top: 20px;">
	<center>
	<h4>Cliente cadastrado com sucesso</h4>
	</center>
	<div style="padding-top: 20px;">
		<center>
		<a href="adicionar_cliente.php" role="button" class="btn btn-sm btn-primary">Cadastrar outro cliente.</a>
		<a href="../index.php" role="button" class="btn btn-sm btn-primary">Menu inicial</a>
		</center>
	</div>
</div>