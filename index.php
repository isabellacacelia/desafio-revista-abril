<? include 'request.php' ?>

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

  <main class="container">
    <h1>Últimas notícias</h1>
    <article>
      <?php
      if (count($api->posts)) {
        $count = 0;
        foreach ($api->posts as $API) {
          $count++;
      ?>
          <?php if ($count % 3 == 1) { ?>
            <div class="post-noticia">
              <img src="<?= $API->featured_image ?>" alt="<?= $API->title ?>" class="post-thumbnail">
              <div class="post-infos">
                <p class="post-categoria">
                  <?php
                  $categoria = (array) $API->terms->category;
                  print_r($categoria[array_keys($categoria)[0]]->name);
                  ?>
                </p>
                <h2><?= $API->title ?></h2>
                <p><img class="post-icone" src="img/relogio.png"><?= date('d/m/Y H:i', strtotime($API->date)) ?></p>
              </div>
            </div>
            <hr>
          <?php } ?>

          <?php if ($count % 3 == 0) { ?>
        <?php }
        }
      } else { ?>
        <h2>Desculpa, tivemos um problema. Tente novamente mais tarde</h2>
      <?php } ?>
    </article>
    <aside>
      <div class="post-aside"></div>
    </aside>
    <?php if ($count > 5) { ?>
      <div class="button-container">
        <button>
          <a>Carregar mais</a>
        </button>
      </div>
    <?php } ?>
  </main>

  <? include 'footer.php' ?>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>