<?php
session_start();

// variavéis
$projectname = "";
$data1    = "";
$data2    = "";
$errors = array();

// conexão com banco de dados
$db = mysqli_connect('localhost', 'root', '', 'desafio');

// registro do projeto
if (isset($_POST['reg_project'])) {
    // recebe todos os dados do formulário
    $projectname = mysqli_real_escape_string($db, $_POST['projectname']);
    $data1 = mysqli_real_escape_string($db, $_POST['data1']);
    $data2 = mysqli_real_escape_string($db, $_POST['data2']);

    // validação para ver se o formulário está inteiro preenchido
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($projectname)) {
        array_push($errors, "Preencha o Nome do Projeto");
    }
    if (empty($data1)) {
        array_push($errors, "Preencha a Data Início");
    }
    if (empty($data2)) {
        array_push($errors, "Preencha a Data de Fim");
    }


    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $project_check_query = "SELECT * FROM projetos WHERE projectname='$projectname' LIMIT 1";
    $result = mysqli_query($db, $project_check_query);
    $project = mysqli_fetch_assoc($result);

    if ($project) { // if user exists
        if ($project['projectname'] === $projectname) {
            array_push($errors, "Este Projeto já exite");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {

        $query = "INSERT INTO projetos (projectname, data1, data2) 
  			  VALUES('$projectname', '$data1', '$data2')";
        mysqli_query($db, $query);
        $_SESSION['projectname'] = $projectname;
        $_SESSION['success'] = "Projeto Salvo!";
        header('location: atividade.php');
    }
}
