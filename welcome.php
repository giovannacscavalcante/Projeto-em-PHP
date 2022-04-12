<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <title>Demonstração do nosso sistema</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; background-color: #87CEEB;}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bem-vindo(a) á Roteirize Viagens!.</h1><br>
     <h2>Sua viagem muito mais barata.</h2>
     
    </div>
    <p>
        <a href="crud/adicionar_cliente.php" class="btn btn-primary btn-lg"input style="margin: 0 15px;">Cadastrar clientes</button> 
        <a href="passagens.php" class="btn btn-primary btn-lg"input style="margin: 0 15px;">Passagens</button>   
        <a href="crud/select.php" class="btn btn-primary btn-lg"input style="margin: 0 15px;">Listar clientes</button>  
        <a href="reset-password.php" class="btn btn-primary btn-lg"input style="margin: 0 15px;">Mudar senha</button>  
        <a href="logout.php" class="btn btn-primary btn-lg"input style="margin: 0 15px;">Sair da conta</button> 
</body>
</html>
