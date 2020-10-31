<?php 
    session_start();
    if(!isset($_SESSION['user']))
    header("Location: ./login.html");
    $conexao = new mysqli("localhost", "root", "", "locadora");
    if($conexao->connect_error){
        die("Connection failed: ". $conexao->connect_error);
    }

    //cliente
    $sel = $_POST['selEmp'];
    //dvd emprestado
    $filme = $_POST['filme'];

    //data emprestimo 
    $emprestimo = date('Y-m-d');
    //devolução
    $devolucao = date('Y/m/d', strtotime('+7 days', strtotime($emprestimo)));

    $sql = "SELECT valor FROM filme where filme.id = ".$filme;

    $result = $conexao->query($sql);
    $row = mysqli_fetch_row($result);
    $valor = $row[0];

    if(!empty($sel)){
        $sql = "INSERT INTO emprestimo(id_cliente, filme, data_emprestimo, data_devolucao, valor) VALUES ('$sel', '$filme', '$emprestimo',  '$devolucao', '$valor');";
        $ins = $conexao->query($sql);

        if(!$ins){
            echo "Erro ao inserir...";
        }
    }else{
        echo "Campos em branco...";
    }

    header('location: lstEmprestimo.php')
?>