<?php snippet('header') ?>
  <body>
    <header>
      <h1><?= $site->title()->html() ?></h1>
      <h2><?= $page->title()->html() ?></h2>
      <div id="info"><?= $page->text()->kt() ?></div>
    <hr>
    </header>

    <?php snippet('menu') ?>

      <main>
        <h1><?= $page->title() ?></h1>
      </main>

<?php snippet('footer') ?>
