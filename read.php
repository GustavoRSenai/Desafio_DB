<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tabela</title>
</head>
<body>
<?php
include 'conexao.php'; // Inclui o arquivo de conexão

$sql = "SELECT * FROM alunos"; // Consulta todos os Alunos
$result = $conn->query($sql); // Executa a consulta

if ($result->num_rows > 0) { // Se há resultados
    echo "<table border='1'>
    <tr>
    <th><p>ID</p></th>
    <th><p>RM</p></th>
    <th><p>Nome</p></th>
    <th><p>Gênero</p></th>
    <th><p>Nascimento</p></th>
    <th><p>Ano</p></th>
    <th><p>Ações</p></th>
    </tr>";
    while ($row = $result->fetch_assoc()) { // Para cada Aluno
        echo "<tr>
                <td><p>" . $row["id"] . "</p></td>
                <td><p>" . $row["Rm"] . "</p></td>
                <td><p>" . $row["Nome"] . "</p></td>
                <td><p>" . $row["Gênero"] . "</p></td>
                <td><p>" . $row["Nascimento"] . "</p></td>
                <td><p>" . $row["Ano"] . "</p></td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "'>Editar</a>
                    <a href='delete.php?id=" . $row["id"] . "'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>"; // Fecha a tabela
} else {
    echo "<p>Nenhum Aluno encontrado.</p>"; // Mensagem se não houver usuários
}
?>
    
</body>
</html>