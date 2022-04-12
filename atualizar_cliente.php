<?php

		$servername = "localhost";
        $username = "u228666546_cavalcante";
        $password = "xr?GloW7I+";
        $dbname = "u228666546_cavalcante";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

	$id = $_POST['id'];
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

$sql = "UPDATE clientes SET nome='$nome', data='$data', rg='$rg', cpf='$cpf', endereco='$endereco', telefone='$telefone', email='$email' WHERE id = $id";

$atualizar = mysqli_query($conn, $sql);

header("location: select.php");

?>
