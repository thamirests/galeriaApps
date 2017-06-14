<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Galeria de aplicativos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  </head>
  <body>
    <main>
    <nav class="nav-estended blue-grey">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo center"><i class="material-icons right">cloud</i>GeoWeb</a>
      </div>
    </nav>
    <!-- <ul id="nav-mobile" class="side-nav fixed"></ul> -->
    <?php echo $__env->yieldContent('conteudo'); ?>
    </main>
    <?php echo $__env->yieldContent('footer'); ?>
    <footer class="page-footer blue-grey">
      <div class="container">

      </div>
    </footer>
    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
  </body>
</html>
