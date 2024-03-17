<?php

$recebido = $_POST['num_paragrafos'];

$lorem_ipsum = '';
if (is_numeric($recebido) && $recebido > 0) {
    for ($i = 0; $i < $recebido; $i++) {
        $lorem_ipsum .= "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ";
    }
}

echo '<h2>Resultado : </h2>' . $lorem_ipsum;

echo '<br><a href="index.php">Voltar</a>';


// 4. No lorem_ipsum.php:
//     a. Receber o número de parágrafos enviado pelo formulário.
//     b. Gerar o texto Lorem Ipsum com base no número de parágrafos fornecido:
//         i. Criar uma lista de parágrafos vazia.
//         ii. Usar um loop para repetir o processo de adicionar um novo parágrafo à lista pelo número de vezes especificado.
//         iii. Cada parágrafo pode ser uma frase ou um conjunto de palavras aleatórias.
//     c. Exibir o texto Lorem Ipsum gerado de volta ao usuário.
//     d. Incluir um link ou botão para permitir que o usuário retorne à página inicial para gerar mais Lorem Ipsum.

// 5. No navegador:
//     a. Após submeter o formulário, exibir o texto Lorem Ipsum gerado na mesma página ou em uma nova página, dependendo da sua implementação.
//     b. Permitir que o usuário clique no link ou botão para voltar à página inicial e gerar mais Lorem Ipsum, se desejar.
