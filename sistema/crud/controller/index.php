<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<?php 
require_once 'view/head.php';
?>
</head>

<body>

<div class="container"
<div class="row justify-content-center bg-light">

<form action= "" method="POST">
     <div class="form-group">     
<label>usuario</label>
<input type="text" name="usuario" id="usuario">
</div>

    <div class="form-group"> 
<label>senha </label>
<input type="password" name="senha" id="senha">
 
</div>


 <div class="form-group">
<button type="submit" class="btn btn-primary" name="autenticar">entrar</button>
<a href="/sistema/index.html" class="btn btn-info">Voltar</a>
</div>
</div>



</form>
</body>
</html>