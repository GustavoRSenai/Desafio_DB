<?php

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
    $Rm = $_POST['Rm']; // Recebe o rm
    $Nome = $_POST['Nome']; // Recebe o nome
    $Genero = $_POST['Gênero']; // Recebe o genero
    $Nascimento = $_POST['Nascimento']; // Recebe o nascimento
    $Ano = $_POST['Ano']; // Recebe o ano
    $sql = "INSERT INTO alunos (Rm, Nome, Gênero, Nascimento, Ano) VALUES ('$Rm', '$Nome', '$Genero', '$Nascimento', '$Ano')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}


?>