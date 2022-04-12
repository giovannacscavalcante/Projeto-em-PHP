<?php
// Inicializando a sessão do usuário
session_start();
// Checando se o usuário já está logado, se sim, direciona-lo para a página de boas vindas
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Incluindo o arquivo config
require_once "config.php";
 
// Definindo as variáveis e inicializando-as com valores vazios
$username = $password = "";
$username_err = $password_err = "";
 
// Processando os dados do formulario quando este for submetido
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Checando se o o nome do usuário está vazio
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor, insira um nome de usuário.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Checando se o campo senha está vazio
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor, insira uma senha.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validando as credencias apresentadas
    if(empty($username_err) && empty($password_err)){
        // Preparando uma consulta estruturada
        $sql = "SELECT id, username, password FROM usuarios WHERE username = ?";
        
        if($stmt = $link->prepare($sql)){
            // Esperando as variaveis que virão
            $stmt->bind_param("s", $param_username);
            
            // Definindo parametros
            $param_username = $username;
            
            // Começando a executar 
            if($stmt->execute()){
                // Armazenando o resultado
                $stmt->store_result();
                
                // Checando se o nome de usuário existe, se sim, verificar a senha
                if($stmt->num_rows == 1){                    
                    // Esperando pelas variaveis resultantes
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Se a senha estiver correta, então se iniciará uma nova conexão
                            session_start();
                            
                            // Armazenando dados da sessão em variaveis
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirecionando o usuário a area de boas vindas
                            header("location: welcome.php");
                        } else{
                            // Exibindo uma mensagem de erro se a senha nao estiver correta
                            $password_err = "A senha que voce digitou nao é válida. Tente Novamente";
                        }
                    }
                } else{
                    // Exibindo uma mensagem de erro caso o usuário nao exista
                    $username_err = "Não há nenhuma conta associada a esse nome de usuário. Tente Novamente.";
                }
            } else{
                echo "Oops! Algo de errado aconteu. Por favor, tente novamente mais tarde.";
            }
        }
        
        // Fechar preparações
        $stmt->close();
    }
    
    // Encerrando a conexão
    $mysqli->close();
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <center>
    <meta charset="UTF-8">
    <title>Roteirize Viagens</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 16px sans-serif; background-color: #87CEEB;    
    position: relative;
    height: 100vh;
    width: 100vw;
    /* adicionando imagem de fundo */
    background: url('aviao.jpg');
    background-size: cover; }
        .wrapper{ width: 350px; padding: 20px;}
    </style>

</head>
<body>
    <div class="wrapper">
        <h2>Olá, viajante.</h2>
        <p>Por favor, preencha com suas informações para encontrarmos as melhores ofertas para você.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Nome de usuário</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Senha</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Entrar">
            </div>
            <p>Não tem uma conta? <a href="register.php">Criar Agora</a></p>
        </form>
    </div>    
</body>
</html>