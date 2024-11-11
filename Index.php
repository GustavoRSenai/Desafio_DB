<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=w>
    <title>Crud Simples</title>
</head>
<body>
<main class="formulario">
    <h1>Gerenciamento de Alunos</h1>
        <form action="store.php" method="POST">
            <label>RM:</label>
            <input type="text" name="Rm" required>
            <label>Nome:</label>
            <input type="text" name="Nome" required>
            <label>Gênero:</label>
            <select id="Gênero" name="Gênero">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
            </select>
            <label>Nascimento:</label>
            <input type="date" name="Nascimento" required>
            <label>Ano:</label>
            <select id="Ano" name="Ano">
                    <option value="Fundamental 1º a 5º anos">Fundamental 1º a 5º anos</option>
                    <option value="Fundamental II 6º a 9º anos">Fundamental II 6º a 9º anos</option>
                    <option value="Ensino Médio 1º, 2º, 3º">Ensino Médio 1º, 2º, 3º ano</option>
            </select>
            <button type="submit">Adicionar Aluno </button>
        </form>
</main>
    <div class="tabela">
        <h2>Lista de Alunos</h2>
    
    
        <?php include 'read.php'; ?>
    </div>
</body>
</html>