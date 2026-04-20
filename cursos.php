<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <!-- CSS personalização -->
    <link rel="stylesheet" href="css/style.css">
    <!-- BootStrap (framework) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js" defer></script>
    <style>

    </style>

</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.html" class="navbar-brand">Sistema Escolar</a>
        </div>
    </nav>
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="car shadow-sm">
                    <div class="card-body">
                        <h2 class="mb-4">Cadastro de Curso</h2>
                        <form action="salvar_curso.php" method="post"></form>
                        <!-- Nome do Curso -->
                        <div class="mb-3">
                            <label class="form-label">Nome do Curso</label>
                            <!-- tipo | classe | nome | requerido -->
                            <input type="text" class="form-control" name="nome_curso" required>

                        </div>
                        <!-- Carga Horária -->
                        <div class="mb-3">
                            <label class="fomr-label">Carga horária</label>
                            <input type="number" class="form-control" name="carga-horaria" required>
                        </div>
                        <!-- Professor -->
                        <div class="mb-3">
                            <label class="form-label"> Professor</label>
                            <input type="text" class="form-control" name="professor" required>
                        </div>
                        <!-- Botão Cadastrar -->
                        <div class="mb-3">
                            <button class="btn btn-success">Cadastrar</button>
                            <a href="index.html" class="btn btn-secondary">Voltar</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


</body>

</html>