<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Desafio WEB EUAX</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <h2>Novo Projeto</h2>
    </div>

    <form method="post" action="registro.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Nome do Projeto</label>
            <input type="text" name="projectname" value="<?php echo $projectname; ?>">
        </div>
        <div class="input-group">
            <label>Data Início</label>
            <input type="date" name="data1" value="<?php echo $data1; ?>">
        </div>
        <div class="input-group">
            <label>Data de Fim</label>
            <input type="date" name="data2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_project">Salvar</button>
            <button type="reset" class="btn" value="Reset">Cancelar</button>
        </div>
    </form>
</body>

</html>