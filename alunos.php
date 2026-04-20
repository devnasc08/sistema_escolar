<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
    <!-- CSS personalização -->
    <link rel="stylesheet" href="css/style.css">
    <!-- BootStrap (framework) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js" defer></script>
    <style>

    </style>
</head>

<body>
    <navnav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="index.html" class="navbar-brand">Sistema Escolar</a>
        </div>
    </navnav>

    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Card Formulário -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Cadastro de Aluno</h2>
                        <!-- action -> Arquivo PHP que vai receber dados method POST = envia os dados de forma segura -->
                        <form action="salvar_aluno.php" method="POST">
                            <!-- NOME -->
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome"
                                    placeholder="Digite o nome do aluno" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Digite o email" required>
                            </div>

                            <!-- Nascimento -->
                            <div class="mb-3">
                                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                                <input type="date" class="form-control" id="data_nascimento" required>
                            </div>

                            <!-- Botão de Ação -->
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar
                                </button>
                                <a href="index.html" class="btn btn-secondary">
                                    Voltar
                                </a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">Cadastro de alunos * Preparado para  PHP + MySql</p>
    </footer>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>