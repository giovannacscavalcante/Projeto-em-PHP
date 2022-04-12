<?php
// Inclui o arquivo de configuração da nossa base de dados
require_once "config.php";
 
// Define as variaveis a serem usadas e as zera para que inicialmente nao guardem conteudo
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processa os dados do formulario quando ele for submetido
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor, digite um nome de usuário.";
    } else{
        // Prepara um select no banco
        $sql = "SELECT id FROM usuarios WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Seta parametros
            $param_username = trim($_POST["username"]);
            
            if(mysqli_stmt_execute($stmt)){
                /* armazena resultados */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Este nome de usuário já existe.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
        }
         
                // encerra
            mysqli_stmt_close($stmt);
            }
    
    // Valida a senha
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor, digite uma senha.";     
    } elseif(strlen(trim($_POST["password"])) < 6){ 
        //a linha acima define que a senha precisa ter pelo menos 6 caracteres
        $password_err = "A senha deve ter no mínimo 6 caracteres.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Valida a confirmação do password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor, escreva novamente a senha.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "As senhas nao conferem.";
        }
    }
    
    // Checa a entrada e verifica por erros antes de inserir no banco de dados
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepara uma statment para inserir o novo usuario
        $sql = "INSERT INTO usuarios (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind as variaveis e injeta a statment
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Seta parametros
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // cria um hash da senha
            
            // execute a statment
            if(mysqli_stmt_execute($stmt)){
                // Redireciona a pagina de login
                header("location: index.php");
            } else{
                echo "Algo deu errado. Por favor, tente novamente.";
            }
        }
         
        // Fecha a statment
        mysqli_stmt_close($stmt);
    }
    
    // encerra a conexao
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <center>
    <meta charset="UTF-8">
    <title>Meu login seguro - LP2 - CETAM</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 16px sans-serif; background-color: #87CEEB; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastro</h2>
        <p>Por favor, preencha o formulário abaixo para completar o registro.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">

                <label><br> Nome de usuário</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Digite novamente sua senha</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Registrar">
                <input type="reset" class="btn btn-default" value="Apagar">
            </div>
            <p>Já tem uma conta? <a href="index.php">Entre aqui</a></p>
        </form>
    </div>    
</body>
</html>