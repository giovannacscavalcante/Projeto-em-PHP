<?php include 'templates/header.php';  ?>

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>


<div class="container" id="tamanhoContainer" style="margin-top: 10px; width: 350px; background-color: #87CEEB border-style: solid; border-color: blue;">
	<h4>Cadastro de Clientes - Roteirize Viagens</h4>
	<form action="inserir_cliente.php" method="post" style="margin-top: 20px">

	  	<div class="mb-3">
		    <label>Nome completo</label>
		    <input type="text" class="form-control" name="nome" placeholder="Nome" required autocomplete="off"> 
	  	</div>

	  	<div class="mb-3">
		    <label>Data de Nascimento</label>
		    <input type="text" class="form-control" name="data" placeholder="Data de Nascimento" required autocomplete="off">
		</div>

  		<div class="mb-3">
		    <label>RG</label>
		    <input type="text" class="form-control" name="rg" placeholder="RG" required autocomplete="off">    
	  	</div>
	
	  	<div class="mb-3">
		    <label>CPF</label>
		    <input type="text" class="form-control" name="cpf" placeholder="CPF" required autocomplete="off">
	  	</div>

	  	<div class="mb-3">
		    <label>Endereço</label>
		    <input type="text" class="form-control" name="endereco" placeholder="Endereço" required autocomplete="off">
	  	</div>
		
		<div class="mb-3">
		    <label>Telefone</label>
		    <input type="text" class="form-control" name="telefone" placeholder="Telefone" required autocomplete="off">
	  	</div>

	  	<div class="mb-3">
		    <label>E-mail</label>
		    <input type="text" class="form-control" name="email" placeholder="E-mail" required autocomplete="off">    
	  	</div>

	  	<div style="text-align: center;">
	  		<button type="submit" id="botao" class="btn btn-primary btn-sm">Cadastrar</button>  <a href="../welcome.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </center>
  </div>

	  	</div>

	  	<?php include 'templates/footer.php';  ?>


