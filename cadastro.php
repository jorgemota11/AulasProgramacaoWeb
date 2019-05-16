<?php
if(empty($_POST['nome']) or empty ($_POST['senha'])
or empty($_POST['email'])
or empty($_POST['observacao'])){
echo "<script>
alert('existem campos que nao foram preenchidos , por favor preencher




;";


    $nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$observacao = $_POST['observacao'];

if(strlen($nome) >=10){ 

    echo $nome."<br>";
    echo strlen($nome)."<br>";
}else{
    echo "<script type='javascript'> 
 "alert('nome muito curto');";
   echo "javascript:window.location='index.php';</script>";

}

echo $email."<br>";
echo $senha."<br>";
echo $observacao."<br>";


?>