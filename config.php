<?php 

    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-julia';

    $conexao = new mysqli($dbHost,$dbUsername, $dbPassword, $dbName); //conexao efetuada

    //para ter certeza de que a conexao foi feita: 
        // if($conexao->connect_error){
        //   echo 'erro';
        // } else {
        //   echo 'conexao efetuada';
//}
  

?>