<?php
    session_start();
    if((!isset($_SESSION['emailprof']) == true) and (!isset($_SESSION['senhaprof']) == true))
    {
       unset($_SESSION['emailprof']);
       unset($_SESSION['senhaprof']);
       header('Location: proflogin.php');
    }

        include_once('config.php');
        
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";

        $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor</title>
    <link rel="stylesheet" href="notacs.css">
</head>
<body>
    
    <h1>Bem Vindo, Professor(a)</h1>
    <div class="d-flex">
              <a href="sairprof.php" class="botaosair">Sair</a>
      
                </div>
    <div class="m-5">
    <table class="table text-white table-bg">
            <thead class= thead-dark>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Sexo</th>
                <th scope="col">Cursos</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Endereço</th>
                </tr>
            </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['sexo']."</td>";
                    echo "<td>".$user_data['cursos']."</td>";
                    echo "<td>".$user_data['data_nasc']."</td>";
                    echo "<td>".$user_data['endereco']."</td>";
                    echo "<tr>";
                }
            ?>
        </tbody>
</table>
    </div>
        
   
</html>