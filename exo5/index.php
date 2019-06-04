<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 5</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 6 - Exercice 5</h1>
                <p class="lead">Faire une page index.php. Tester sur cette page que tous les 
                    paramètres de cette URL existent et les afficher: index.php?week=12</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php 
              if(isset($_GET['week'])){
                  echo 'Il y a ' . $_GET['week'] . ' semaines dans à peu près trois mois.';
              } else {
                  echo 'Vous n\'avez pas indiqué le nombre de semaines.';
              }
            ?>
          </main>
          <!-- footer -->
          <footer>

          </footer>
      </div>
      <!-- scripts JQuery, Popper, Angular et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
  </body>
</html>
