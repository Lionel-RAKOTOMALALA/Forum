<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">🚀Les bros🚀</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" href="./my-profil.php">Mon profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="./index.php">Les questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./publish-question.php">Publier une question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./my-questions.php">Mes questions</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./discussion.php">Discussion instantanée</a>
        </li>
        <?php
          if(isset($_SESSION['authe'])){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="./actions/users/logoutAction.php">Déconnexion</a>
            </li>
            <?php
          }
        ?>
       
      </ul>
    </div>
  </div>
</nav>