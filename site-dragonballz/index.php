<?php
// incluir a página php de conexão
include("./db/conn.php");
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dragon Ball Z</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>

    <div class="container my-3">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            $sql = "SELECT id_personagem, nome_personagem, descricao
                    FROM personagens";
            // Comando para selecionar os dados no banco de dados
            // e guardar na variavel $resultado
            $resultado = $conn->query($sql);
            // enquanto (laço de repetição - loop)
            while ($linha = $resultado->fetch_object()) {
            ?>
                <!-- Inicio do loop -->
                <div class="col">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h3><?php echo($linha->nome_personagem); ?></h3>
                            <?php echo(utf8_encode($linha->descricao)); ?>
                        </div>
                    </div>
                </div>
                <!-- Fim do loop -->
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>