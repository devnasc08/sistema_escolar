<!DOCTYPE html>
<html lang="pt-br">

<head>
   <!-- Codificação de caracteres -->
   <meta charset="UTF-8">
   <!-- Responsividade -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sistema Escolar</title>
   <!-- CSS personalização -->
   <link rel="stylesheet" href="css/style.css">
   <!-- BootStrap (framework) -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="js/bootstrap.bundle.js" defer></script>

</head>

<body>
   <!-- ==== NAVBAR ==== -->
   <!-- Barra de Navegação do sistema -->
   <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container">
         <!-- Nome do sistema  -->
         <a class="navbar-brand" href="#">Sistema Escolar</a>

         <!-- Botão para abrir menu no celular -->
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
         </button>

         <!-- Funções do Menu -->
         <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
               <!-- ms-auto empurra o menu para a direita -->
               <li class="nav-item">
                  <a class="nav-link" href="alunos.html">Alunos</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="cursos.html">Cursos</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="matricula.html">Matriculas</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <!-- ==== Conteúdo Principal ==== -->
   <main class="container my-5">
      <!-- my-5 = margem vertical -->

      <!-- Titulo  -->
      <div class="text-center mb-5">
         <h1>Bem-vindo ao Sistema Escolar</h1>
         <p class="text-muted">
            Gerencie alunos, cursos e matriculas com facilidade.
         </p>
      </div>

      <!-- GRID de Cards -->
      <div class="row g-4">
         <!-- Espaçamento de Linhas -->

         <!-- CARD1 -->
         <div class="col-md-4">
            <!-- 3 Colunas no Desktop -->
            <div class="card shadow-sm h-100">
               <div class="card-body">
                  <h5 class="card-title">Alunos</h5>
                  <p class="card-text">Cadastre e visualize alunos.</p>
                  <a href="alunos.html" class="btn btn-primary">Acessar</a>
               </div>
            </div>
         </div>

         <!-- CARD 2 -->
         <div class="col-md-4">
            <div class="card shadow-sm h-100">
               <div class="card-body">
                  <h5 class="card-title">Cursos</h5>
                  <p class="card-text"> Gerencie cursos disponíveis.</p>
                  <a href="cursos.html" class="btn btn-success">Acessar</a>
               </div>
            </div>
         </div>

         <!-- Card 3 -->
         <div class="col-md-4">
            <div class="card shadow-sm h-100">
               <div class="card-body">
                  <h5 class="card-title">Matriculas</h5>
                  <p class="card-text">Relacione alunos com cursos.</p>
                  <a href="matricula.html" class="btn btn-warning">Acessar</a>
               </div>
            </div>
         </div>

      </div>

   </main>

   <!-- ==== Rodapé ==== -->
   <footer class="bg-dark text-white text-center py-3 mt-5">
      <!-- py-3 = padding vertical  -->
      <p class="mb-0">
         © 2026 Sistema Escolar • Projeto em evolução
      </p>
   </footer>

   <!-- bootstrap JS (Para o menu funcionar) -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>