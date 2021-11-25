<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
require_once '../controller/cPessoaF.php';
$id = 0;
if(isset($_POST['updatePF'])){
    $id = $_POST['id'];
}
$cadPFs = new cPessoaF();
$pf = $cadPFs->getPessoaFById($id);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Pessoa Fisíca</title>
    </head>
    <body>
        <h1>Editar Pessoa Fisíca</h1>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
