<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: welcome.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <title>Pacotes disponíveis</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; background-color: #87CEEB;}
    </style>
</head>
<body>
    <div class="page-header">
        <h1> <b><?php ?></b>Pacotes disponíveis</h1><br>
      </div>
    <p>
        
<table border="1">
    <tr>
        <th height="80">Saindo de</th>
        <th height="80">Indo para</th>
        <th height="80">Data ida</th>
        <th height="80">Data volta</th>
        <th height="80">Hora saída</th>
        <th height="80">Hora chegada</th>
        <th height="80">Preço</th>
    </tr>
    <tr>
        <td width="20%">MAO(Manaus)</td>
        <td width="20%">GRU(São Paulo)</td>
        <td width="20%">30/03/2022</td>
        <td width="20%">30/03/2022</td>
        <td width="20%">11:00</td>
        <td width="30%">15:00</td>
        <td width="30%">R$ 800,00</td>
        
    </tr>
     <tr>
        <td width="20%">MAO(Manaus)</td>
        <td width="20%">BSB(Brasília)</td>
        <td width="20%">31/03/2022</td>
        <td width="20%">01/04/2022</td>
        <td width="20%">23:00</td>
        <td width="30%">04:00</td>
        <td width="30%">R$ 700,00</td>
        
         <tr>
        <td width="20%">MAO(Manaus))</td>
        <td>SDU(Rio de Janeiro)</td>
        <td>25/03/2022</td>
        <td>25/03/2022</td>
        <td>14:00</td>
        <td>18:00</td>
        <td>R$ 1000,00</td>

         <tr>
        <td width="20%">BSB(Brasília)</td>
        <td>GRU(São Paulo)</td>
        <td>24/03/2022</td>
        <td>24/03/2022</td>
        <td>12:00</td>
        <td>14:00</td>
        <td>R$ 500,00</td>
        
         
</table>
  <div style="padding-top:20px;">
    <center>
    <a href="../welcome.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </center>
  </div>

</body>
</html>