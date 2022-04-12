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

	$id = $_GET['id'];


?>

<?php include '../templates/header.php'?>

<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
	<h4>Editar</h4>
	<form action="atualizar_cliente.php" method="post" style="margin-top: 20px">

		<?php 

		$sql = "SELECT * FROM clientes WHERE id = $id";
		$buscar = mysqli_query($conn, $sql);

		while($array = mysqli_fetch_array($buscar)) {

				$id = $array['id'];
          		$nome = $array['nome'];
          		$data = $array['data'];
          		$rg = $array['rg'];
         		$cpf = $array['cpf'];
          		$endereco = $array['endereco'];
          		$telefone = $array['telefone'];
          		$email = $array['email'];

		?>

	  	<div class="mb-3">
		    <label>Nome</label>
		    <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
		    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
	  	</div>

	  	<div class="mb-3">
		    <label>Data de Nascimento</label>
		    <input type="text" class="form-control" name="data" value="<?php echo $data ?>">
		    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
	  	</div>

	  	<div class="mb-3">
		    <label>RG</label>
		    <input type="text" class="form-control" name="rg" value="<?php echo $rg ?>">
		    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
	  	</div>

	  	<div class="mb-3">
		    <label>CPF</label>
		    <input type="text" class="form-control" name="cpf" value="<?php echo $cpf ?>">
		    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
	  	</div>

	  	<div class="mb-3">
		    <label>Endereço</label>
		    <input type="text" class="form-control" name="endereco" value="<?php echo $endereco ?>">
		    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
	  	</div>

	  	<div class="mb-3">
		    <label>Telefone</label>
		    <input type="text" class="form-control" name="telefone" value="<?php echo $telefone ?>">
		    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
	  	</div>

	  	<div class="mb-3">
		    <label>Email</label>
		    <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
		    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
	  	</div>



	  	<!--Alinhar Botão a direita-->
	  	<div style="text-align: right;">
	  		<button type="submit" id="botao" class="btn btn-danger btn-sm">Atualizar dados</button>
	  	</div>
	  <?php } ?>
	</form>	
</div>

<?php include '../templates/footer.php'; ?>