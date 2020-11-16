<?php
// variavéis
$atividade  = "";
$data1      = "";
$data2      = "";
$finalizada = "";
$errors = array();

// conexão com banco de dados
$db = mysqli_connect('localhost', 'root', '', 'desafio');

// registro do projeto
if (isset($_POST['save'])) {
    // recebe todos os dados do formulário
    $atividade = mysqli_real_escape_string($db, $_POST['atividade']);
    $data1 = mysqli_real_escape_string($db, $_POST['data1']);
    $data2 = mysqli_real_escape_string($db, $_POST['data2']);
    $finalizada = mysqli_real_escape_string($db, $_POST['finalizada']);

    // validação para ver se o formulário está inteiro preenchido
    if (empty($atividade)) {
        array_push($errors, "Preencha o Nome da Atividade");
    }
    if (empty($data1)) {
        array_push($errors, "Preencha a Data Início");
    }
    if (empty($data2)) {
        array_push($errors, "Preencha a Data de Fim");
    }
    if (count($errors) == 0) {

        $query = "INSERT INTO atividades (atividade, data1, data2, finalizada) 
  			  VALUES('$atividade', '$data1', '$data2', '$finalizada')";
        mysqli_query($db, $query);
        $_SESSION['atividade'] = $atividade;
        header('location: resultado.php');
    }
}
