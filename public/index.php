<!doctype html>
<html lang="en">

    <head>
        <?php include 'partials/meta.php';  ?>
        <title>PW | Home</title>
    </head>

    <body>

      <div class="wrapper">

        <?php include 'partials/header.php';  ?>
        <!-- FIN HEADER -->

        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
        <!-- DEBUT MAIN -->

        <main class="page-main">

            <div class="contenu-1">
              <div class="section-1">

              </div>

              <div class="section-2">
                <h2><em class="thin">UN AN APRES SA SORTIE,</em><br/>POWER FREAK<br/>
                  <em class="color">SE FAIT UN NOUVEL <br/>ECO-LOOK !</em></h2>
              </div>
              <div class="section-2bis">
                <nav>
                  <a class="savoir_plus" href="recyclage.php" title="">En savoir plus</a>
                </nav>
              </div>
            </div>

            <!-- Fin contenu-1 -->

            <div class="contenu-2">
              <div class="section-3">
                <h2 class="color">2 GOUTS 100% NATURELS :</h2>
              </div>

              <div class="section-4">
                <h3>PAMPLEMOUSSE ROSE</h3>
                <h3>ET FRAMBOISE</h3>
              </div>
            </div>

            <!-- Fin contenu-2 -->

            <div class="contenu-3">
              <div class="section-5">
                MON IMAGE
              </div>

              <div class="section-6">
                <h2>UNE BOISSON <br/> ENERGISANTE</h2>
              </div>
            </div>

            <!-- Fin contenu-3 -->

        </main>

        <!-- FIN MAIN -->
        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

        <?php include 'partials/footer.php';  ?>
        <!-- FIN FOOTER -->

      </div>

      <script type="text/javascript" charset="utf-8">
          $(window).load(function() {
            $('.flexslider').flexslider();
          });
          $( function() {
            $( "#accordion" ).accordion();
          } );
      </script>

    </body>
</html>
