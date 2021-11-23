<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php

    function linkSite($dominio) {
        ?>
        <a href="https://www.<?php echo $dominio ?>.com.br" target="blank">
            <?php echo $dominio ?>
        </a>
        <?php
    }
    ?>
    <head>
        <meta charset="UTF-8">
        <title>INF4M211 - Primeiro Projeto</title>
    </head>
    <body>
        <h1>Cadastro de Pessoas</h1>
        <h2>INF4M211</h2>
        <h3>UC12</h3>
        <table><!-- Cria tabela -->
            <tr><!-- Cria linha -->
                <td><!-- Cria coluna -->
                    <a href="view/cadPessoaF.php">Ger. Pessoa Fisíca</a> | 
                </td>
                <td>
                    <a href="#">Ger. Pessoa Jurídica</a>
                </td>
            </tr>
        </table>
    </body>
</html><!-- Fecha a pág -->
