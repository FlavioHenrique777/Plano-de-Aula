<?php
require_once 'cabecalho_normal.php'
?>
<script src="assets/js/personalizado.js"></script>
<DOCTYPE html>
  <style>
  input[class=tb5] {
    width: 30%;
    padding: 10px 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid green;
    border-radius: 4px;
  }
  </style>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<html>
  <head>
      <meta charset='utf-8'>
      <title>Login</title>
<div class="row">
    <div class="col-md-12">
      <div align="center">
<br><br><br>
<br>
<h1>ÁREA DE LOGIN</h1>
<br>
<form action="login.php" method="POST">
  <input class="tb5" name="login" type="text" placeholder=" Login:" required><br>
      <input class="tb5" name="senha" type="password" placeholder=" Senha:" required>
        <br><br>
      <input type="submit" value="ENTRAR" class="btn btn-success"> <br>
</form>
    <br>


<form action="criar-usuario.php" method="POST">
      <input type="submit" value="CADASTRAR" class="btn btn-danger">

</form>
<br><br><br><br><br><br><br><br>


</div>
<div align="right">
  <?php require_once 'rodape.php'; ?>
</div>
<?php ?>
