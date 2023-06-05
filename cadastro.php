    <?php
        include("conexao.php");

    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $email=$_POST['email'];
    $numero=$_POST['numero'];
    $msg=$_POST['msg'];

    $sql="INSERT INTO cadastro(nome, sobrenome, email,numero,msg)
            VALUES ('$nome','$sobrenome','$email','$numero','$msg')";
        
    if(mysqli_query($conexao, $sql)){
            echo "Cadastrado com sucesso";
        }
        else{
        echo "Erro" .mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);

    ?>