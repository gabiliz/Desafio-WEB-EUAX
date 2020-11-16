<!DOCTYPE html>
<html>

<head>
    <title>Desafio Web EUAX</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <h2>Nova Atividade</h2>
    </div>
    <form method="post" action="server_atividade.php">
        <div class="input-group">
            <label>Atividade</label>
            <input type="text" name="atividade" value="">
            <button class="add btn" type="button">Adicionar</button>
            <button class="remove btn" type="button">Remover</button>
            <div id="new_chq"></div>
            <input type="hidden" value="1" id="total_chq">
        </div>
        <div class="input-group">
            <label>Data Início</label>
            <input type="date" name="data1" value="<?php echo $data1; ?>">
        </div>
        <div class="input-group">
            <label>Data de Fim</label>
            <input type="date" name="data2">
        </div>
        <p>A atividade foi finalizada?</p>
        <input type="radio" name="finalizada" value="sim">
        <label for="male">Sim</label><br>
        <input type="radio" name="finalizada" value="nao">
        <label for="female">Não</label><br>
        <div class="input-group">
            <button type="submit" class="btn" name="save">Salvar</button>
            <button type="reset" class="btn" value="Reset">Cancelar</button>
        </div>
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $('.add').on('click', add);
    $('.remove').on('click', remove);

    function add() {
        var new_chq_no = parseInt($('#total_chq').val()) + 1;
        var new_input = "<input type='text' id='new_" + new_chq_no + "'>";

        $('#new_chq').append(new_input);

        $('#total_chq').val(new_chq_no);
    }

    function remove() {
        var last_chq_no = $('#total_chq').val();

        if (last_chq_no > 1) {
            $('#new_' + last_chq_no).remove();
            $('#total_chq').val(last_chq_no - 1);
        }
    }
</script>

</html>