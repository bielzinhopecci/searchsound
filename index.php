<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Search Sound</title>

    <?php include 'includes/link.php'; ?> 

  </head>

<body>
    
    
    <header>
       <?php 
        $pagina='index';
        include 'includes/menu.php'; ?> 
    </header>

<div class="container">
        <div class="row">
            <div class="carroul-l col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <a href="#">
                <img src="dist/img/rock-main.png" alt="Rock" class="img-animated">
            </a>
            </div>
    
            <div class="carroul-r col-lg-6 col-md-6 col-sm-12 col-xs-12 toggle-img">
                <a href="#">
                    <img src="dist/img/rock-second.jpg" alt="Rock" class="img-animated">
                </a>
                    <div class="carroul-rd">
                            <a href="#">
                        <img src="dist/img/rock-three.jpg" alt="Rock" class="img-animated">
                        </a>
                    </div>
            </div>
        </div>
    <hr class="prop">
</div>

<div class="container">
    <h2>História</h2>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <img class="mb-3" src="dist/img/rock-1.jpg" alt="Instrumentos">
                    <strong>Rock</strong>
                    <p class="py-2">Este gênero musical de grande sucesso surgiu nos Estados Unidos nos anos 50 (década de 1950).
                     Inovador e diferente de tudo que já tinha ocorrido na música. <a href="rock.php">Veja mais...</a>
                    </p>
            </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <img class="mb-3" src="dist/img/rock-3.jpg" alt="Instrumentos">
                            <strong>Samba</strong>
                            <p class="py-2">Nunc hendrerit lectus in purus imperdiet, quis condimentum dolor lobortis. 
                            In varius, erat id interdum auctor, nisi ex consequat mi, 
                            ut aliquet felis lectus sit amet orci. <a href="#">Veja mais...</a>
                            </p>
                    </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <img class="mb-3" src="dist/img/rock-3.jpg" alt="Instrumentos"> 
                    <strong>Pagode</strong>
                    <p class="py-2">Nunc hendrerit lectus in purus imperdiet, quis condimentum dolor lobortis. 
                    In varius, erat id interdum auctor, nisi ex consequat mi, 
                    ut aliquet felis lectus sit amet orci. <a href="#">Veja mais...</a>
                    </p>
            </div>
        </div>
    <hr class="prop">
</div>

<div class="container">
        <h2>Instrumentos</h2>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                    <img src="dist/img/rock.jpg" alt="Instrumentos"> 
                </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                            <img src="dist/img/samba.jpg" alt="Instrumentos"> 
                        </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-3">
                    <img src="dist/img/pagode.jpg" alt="Instrumentos"> 
                </div>
            </div>
        <hr class="prop">
    </div>

        <footer>
       <?php include 'includes/footer.php'; ?> 
        </footer>


       <?php include 'includes/script.php'; ?> 
  </body>

</html>