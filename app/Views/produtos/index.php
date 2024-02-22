<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Produtos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <h1 class="text-danger text-center"><?= $title ?></h1>

        <table class="table table-bordered table-success table-striped container border border-black text-center">
        
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor de Compra</th>
                    <th>Valor de Venda</th>
                    <th>Quantidade</th>
                    <th>Validade</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($produtos as $produto) : ?>
                <tr>
                    <td><?= $produto['nome'] ?></td>
                    <td><?= $produto['descricao'] ?></td>
                    <td><?= $produto['valor_de_compra'] ?></td>
                    <td><?= $produto['valor_de_venda'] ?></td>
                    <td><?= $produto['quantidade'] ?></td>
                    <?php if ($produto['validade'] == ''): ?>
                        <td>Validade não informada!</td>
                    <?php else: ?>
                        <td><?= $produto['validade'] ?></td>
                    <?php endif; ?>
                </tr>
                <?php endforeach ?>
            </tbody>
            
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
