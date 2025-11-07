<?php 
    session_start();
    //confirmar os dados escritos nos campos
    //print_r($_REQUEST);

    //confirmar se esta sendo submitado
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //confirmar dados
        //print_r('Email: '. $email);
        //print_r('Senha: '. $senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = $conexao->query($sql);

        //verificar se tem as informações no banco 
        //print_r($result);

        if(mysqli_num_rows($result) < 1){
            //se não existir as informações, eu destruo os dados
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        } else {
            //Ao acessar o sistema, cria-se as variáveis
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

           header('Location: sistema.php');
        }

    } else {
        //Não acessa e retorna 
        header('Location: login.php');
    }


?>