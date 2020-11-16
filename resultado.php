<?php include('server.php'); ?>
<?php include('server_atividade.php'); ?>
<?php $results = mysqli_query($db, "SELECT * FROM projetos"); ?>
<link rel="stylesheet" type="text/css" href="tabela.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<body>
    <br><br><br><br><br><br><br><br><br><br>
    <h1>Tabela de Projetos</h1>
    <table>
        <thead>
            <tr>
                <th>ID Projeto</th>
                <th>Nome do Projeto</th>
                <th>Data Início</th>
                <th>Data de Fim</th>
            </tr>
        </thead>

        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['idprojeto']; ?></td>
                <td><?php echo $row['projectname']; ?></td>
                <td><?php echo $row['data1']; ?></td>
                <td><?php echo $row['data2']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <form>
        <?php $results = mysqli_query($db, "SELECT * FROM atividades"); ?>
        <h1>Tabela de Atividades</h1>
        <table>
            <thead>
                <tr>
                    <th>ID Atividade</th>
                    <th>ID Projeto</th>
                    <th>Nome da Atividade</th>
                    <th>Data Início</th>
                    <th>Data de Fim</th>
                    <th>Finalizada?</th>
                </tr>
            </thead>

            <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['idatividade']; ?></td>
                    <td><?php echo $row['idprojeto']; ?></td>
                    <td><?php echo $row['atividade']; ?></td>
                    <td><?php echo $row['data1']; ?></td>
                    <td><?php echo $row['data2']; ?></td>
                    <td><?php echo $row['finalizada']; ?></td>
                </tr>
            <?php } ?>
        </table>