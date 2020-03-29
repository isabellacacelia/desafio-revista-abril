<? include 'request.php' ?>

<?php

if (count($api->posts)) {
    $count = 1;
    foreach ($api->posts as $API) {
?>
        <div class="post-noticia">
            <img src="<?= $API->featured_image ?>" alt="<?= $API->title ?>" class="post-thumbnail" />
            <div class="post-infos">
                <p class="post-categoria">
                    <?php
                    $categoria = (array) $API->terms->category;
                    print_r($categoria[array_keys($categoria)[0]]->name); ?>
                </p>
                <h2><?= $API->title ?></h2>
                <p>
                    <img class="post-icone" src="img/relogio.png" /><?= date('d/m/Y H:i', strtotime($API->date)) ?>
                </p>
            </div>
            <hr />
        </div>
        <?php if ($count % 3 == 0) { ?>
    <?php }
    }
} else { ?>
    <h2>Desculpa, tivemos um problema. Tente novamente mais tarde</h2>
<?php } ?>

<?php if ($count >= 3 && $count % 3 == 1) { ?>
    <div class="button-container">
        <button>
            <a href="index.php?qtd=<?= $qtd + 1 ?>">Carregar mais</a>
        </button>
    </div>

<?php }
?>