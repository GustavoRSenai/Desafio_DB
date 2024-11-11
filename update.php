<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM alunos WHERE id=$id"; // Consulta o usuário
    $result = $conn->query($sql); // Executa a consulta
    $aluno = $result->fetch_assoc(); // Obtém os dados do usuário
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Rm = $_POST['Rm']; // Recebe o rm
    $Nome = $_POST['Nome']; // Recebe o nome
    $Genero = $_POST['Genero']; // Recebe o genero
    $Nascimento = $_POST['Nascimento']; // Recebe o nascimento
    $Ano = $_POST['Ano']; // Recebe o ano
    $sql = "UPDATE alunos SET Rm='$Rm', Nome='$Nome', Gênero='$Genero', Nascimento='$Nascimento', Ano='$Ano' WHERE id=$id"; // Prepara a atualização

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Atualizar Alunos</title>
    <style>body{ height: 100vh;
    }</style>
</head>
<body>
    <main class="formulario">
        <h1>Atualizar Alunos</h1>
        <form action="" method="POST">
            <label>Rm:</label>
            <input type="text" name="Rm" value="<?php echo $aluno['Rm']; ?>" required>
            <label>Nome:</label>
            <input type="text" name="Nome" value="<?php echo $aluno['Nome']; ?>" required>
            <label>Gênero:</label>
            <select id="opcoes" name="Genero" value ="<?php echo $aluno['Genero']; ?>" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
            </select>
            <label>Nascimento:</label>
            <input type="date" name="Nascimento" value ="<?php echo $aluno['Nascimento']; ?>" required>
            <label>Ano:</label>
            <select id="opcoes" name="Ano" value ="<?php echo $aluno['Ano']; ?>" required>
                    <option value="Fundamental 1º a 5º anos">Fundamental 1º a 5º anos</option>
                    <option value="Fundamental II 6º a 9º anos">Fundamental II 6º a 9º anos</option>
                    <option value="Ensino Médio 1º, 2º, 3º">Ensino Médio 1º, 2º, 3º ano</option>
            </select>
            <button type="submit">Atualizar</button>
        </form>
        <a href="index.php">Cancelar</a> <!-- Link para voltar -->
    </main>
</body>
</html>