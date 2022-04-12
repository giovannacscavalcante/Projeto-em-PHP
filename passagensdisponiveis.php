<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:passagens.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <title>Passagens disponíveis</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; background-color: #87CEEB;}
    </style>
</head>
<body>
    <div class="page-header">
        <h1> <b><?php ?></b>Passagens disponíveis </h1><br>
      </div>
    <p>
        
<table border="2">
    <tr>
        <th height="70"> Saindo de </th>
        <th height="70"> Indo para </th>
        <th height="70"> Data ida </th>
        <th height="70"> Data volta </th>
        <th height="70"> Hora saída </th>
        <th height="70"> Hora chegada </th>
        <th height="70"> Preço </th>
    </tr>
    <tr>
        <td width="150"> MAO(Manaus) </td>
        <td width="150"> GRU(São Paulo)</td>
        <td width="150"> 25/03/2022 </td>
        <td width="150"> 30/03/2022 </td>
        <td width="150"> 11:00 </td>
        <td width="150"> 15:00 </td>
        <td width="150"> R$ 800,00 </td>
        
    </tr>
     <tr>
        <td width="70">MAO(Manaus)</td>
        <td width="70">GRU(São Paulo)</td>
        <td width="70">30/03/2022</td>
        <td width="70">04/04/2022</td>
        <td width="70">12:00</td>
        <td width="70">16:00</td>
        <td width="70">R$ 800,00</td>
        
        
         <tr>
        <td width="70"> MAO(Manaus) </td>
        <td width="70"> GRU(São Paulo) </td>
        <td width="70"> 31/03/2022 </td>
        <td width="70"> 31/04/2022 </td>
        <td width="70"> 10:00 </td>
        <td width="70"> 14:00 </td>
        <td width="70"> R$ 900,00 </td>
        
         <tr>
        <td width="70"> MAO(Manaus) </td>
        <td width="70"> GRU(São Paulo) </td>
        <td width="70"> 02/04/2022 </td>
        <td width="70"> 06/04/2022 </td>
        <td width="70"> 23:00 </td>
        <td width="70"> 03:00 </td>
        <td width="70"> R$ 700,00 </td>
        
        <tr>
        <td width="70"> MAO(Manaus) </td>
        <td width="70"> GRU(São Paulo) </td>
        <td width="70"> 30/03/2022 </td>
        <td width="70"> 02/04/2022 </td>
        <td width="70"> 11:00 </td>
        <td width="70"> 15:00 </td>
        <td width="70"> R$ 950,00 </td>
        
        <tr>
        <td width="70"> MAO(Manaus) </td>
        <td width="70"> GRU(São Paulo) </td>
        <td width="70"> 30/04/2022 </td>
        <td width="70"> 30/05/2022 </td>
        <td width="70"> 01:00 </td>
        <td width="70"> 04:00 </td>
        <td width="70"> R$ 600,00 </td>
        
        <tr>
        <td width="70"> MAO(Manaus) </td>
        <td width="70"> GRU(São Paulo) </td>
        <td width="70"> 01/04/2022 </td>
        <td width="70"> 09/04/2022 </td>
        <td width="70"> 09:00 </td>
        <td width="70"> 15:00 </td>
        <td width="70"> R$ 750,00 </td>
        



</table>
  <div style="padding-top:20px;">
    <center>
    <a href="welcome.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </center>
  </div>

</body>
</html>
