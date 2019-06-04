<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 3</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 6 - Exercice 3</h1>
                <p class="lead">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php 
              if(isset($_GET['startDate']) AND isset($_GET['endDate'])){
                  echo 'Date de départ : ' . $_GET['startDate'] . ' et date d\'arrivée : ' . $_GET['endDate'];
              } else {
                  echo 'Attention, vos dates ne sont pas définies !';
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
