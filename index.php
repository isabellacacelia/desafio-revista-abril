<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Teste - Isabella Cacélia Vicente</title>
  <link rel="shortcut icon" href="img/icone.png" type="image/x-icon" />
  <link rel="stylesheet" href="assets/css/grid-system.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <? include 'header.php' ?>

  <div class="load">
  </div>

  <main class="container">
    <h1>Últimas notícias</h1>
    <article>
      <? include 'noticias.php' ?>
      <div class="button-container">
        <button data-page="2" id="btn-carregar-mais">
          <a>Carregar mais</a>
        </button>
      </div>
    </article>
    <aside>
      <div class="post-aside"></div>
    </aside>

  </main>

  <? include 'footer.php' ?>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>