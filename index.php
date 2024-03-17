<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem Ipsum Gerador</title>
</head>

<body>

    <h2>Gerador de Lorem Ipsum</h2>
    <form action="lorem_ipsum.php" method="post">
        <label for="num_paragrafos">Número de parágrafos:</label>
        <input type="number" id="num_paragrafos" name="num_paragrafos" min="1" required>
        <button type="submit">Gerar Lorem Ipsum</button>
    </form>


    <?php
    // Início

    // 1. Carregar a página index.php no navegador.

    // 2. No index.php:
    //     a. Exibir um formulário com um campo de entrada para o número de parágrafos desejados.
    //     b. Exibir um botão para submeter o formulário.

    // 3. Quando o usuário preencher o número de parágrafos e clicar no botão "Gerar Lorem Ipsum":
    //     a. Validar se o campo de entrada não está vazio e se contém um número inteiro positivo.
    //     b. Se a validação passar, enviar os dados do formulário para o arquivo lorem_ipsum.php usando um método POST.
    // Verifica se o método de requisição é POST e se o campo 'num_paragrafos' está definido

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num_paragrafos"])) {
        $num_paragrafos = $_POST["num_paragrafos"];
    
        if (filter_var($num_paragrafos, FILTER_VALIDATE_INT) && $num_paragrafos > 0) {
            
            $lorem_ipsum = "";
            for ($i = 0; $i < $num_paragrafos; $i++) {
                $lorem_ipsum .= "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ";
            }
            
            echo "<h2>Texto Lorem Ipsum Gerado:</h2>";
            echo "<p>$lorem_ipsum</p>";
        } else {
            echo "<h2>Erro: Número de parágrafos inválido.</h2>";
        }
    } else {
        echo "<h2>Erro: O formulário não foi submetido corretamente.</h2>";
    }
  
    ?>
</body>

</html>