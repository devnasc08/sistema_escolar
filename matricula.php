<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula</title>
    <!-- CSS personalização -->
    <link rel="stylesheet" href="css/style.css">
    <!-- BootStrap (framework) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js" defer></script>

</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.html" class="navbar-brand">Sistema Escolar</a>

        </div>
    </nav>

    <main class="container my-5">
        <div class="justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="mb-4">Matrícula</h2>

                        <form action="salvar_matricula.php" method="post">

                            <!-- Aluno -->
                            <div class="mb-3">
                                <label class="form-label">Aluno</label>
                                <select name="aluno" class="form-select" required>
                                    <option disable selected>Selecione</option>
                                    <option>João</option>
                                    <option>Maria</option>
                                </select>
                            </div>

                            <!-- Curso -->
                            <div class="mb-3">
                                <label class="form-label">Curso</label>
                                <select name="" curso class="form-select" required>
                                    <option disable selected>Selecione</option>
                                    <option>Informática</option>
                                    <option>Desenvolvimento Web</option>
                                </select>
                            </div>

                            <!-- Data -->
                            <div class="mb-3">
                                <label class="form-label">Data</label>
                                <input type="date" name="data_matricular" class="form-control" required>
                            </div>

                            <button class="btn btn-warning">Matricular</button>
                            <a href="index.html" class="btn btn-secondary">Voltar</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>



</body>

</html>