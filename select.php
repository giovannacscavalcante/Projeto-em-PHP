<?php include '../templates/header.php' ?>
  
<div class="container" style="margin-top: 10px;">

  <h3>Lista</h3>
  <br>
  <table class="table table-bordered table-responsive">
  <thead class="thead-dark">
    <tr>
      <!--<th scope="col">ID</th>-->
      <th scope="col">Nome Completo</th>
      <th scope="col">Data de nascimento</th>
      <th scope="col">RG</th>
      <th scope="col">CPF</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>

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

        
        $sql = "SELECT id, nome, data, rg, cpf, endereco, telefone, email FROM clientes";
        $busca = mysqli_query($conn, $sql);

        while ($array = mysqli_fetch_array($busca)) {
          $id = $array['id'];
          $nome = $array['nome'];
          $data = $array['data'];
          $rg = $array['rg'];
          $cpf = $array['cpf'];
          $endereco = $array['endereco'];
          $telefone = $array['telefone'];
          $email = $array['email'];
      ?>

<tr>
      <!--<td><?php echo $id ?></td>-->
      <td><?php echo $nome ?></td>
      <td><?php echo $data ?></td>
      <td><?php echo $rg ?></td>
      <td><?php echo $cpf ?></td>
      <td><?php echo $endereco ?></td>
      <td><?php echo $telefone ?></td>
      <td><?php echo $email ?></td>
      <td>

    <a class="btn btn-info btn-sm" href="editar_cliente.php?id=<?php echo $id ?>" role="button"><i class="fas fa-pen-square"></i>&nbsp;&nbsp;Editar</a>

    <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id ?>" role="button"><i class="fas fa-trash"></i></i>&nbsp;&nbsp;Excluir</a>



      </td>
    </tr>

    <?php } ?>



</table>

<!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <div style="padding-top: 20px;">
    <center>
    <a href="../index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </center>
  </div>


 

<?php include '../templates/footer.php' ?>


