<?php snippet('header') ?>
  <body>
    <header>
      <h1 class=""><?= $site->title()->html() ?></h1>
      <h2><?= $page->title()->html() ?></h2>
      <div id="info"><?= $page->text()->kt() ?></div>
    <hr>
    </header>

    <?php snippet('menu') ?>

    <?php if ($page->hasGrandChildren()): ?>
      <main>
        <h2>Featured Items of the Week</h2>
        <div class="itemsContainer">
        <?php foreach ($page->grandChildren()->listed() as $item): ?>
          <?php if ($item->toggle()->toBool() === true):?>
              <div class="itemContainer">
                <div class="itemCost">
                  <small><?= $item->cost()->html() ?></small>
                </div>
                <div class="itemImage">
                  <ul id="itemSlider" class="itemSlider">
                  <?php foreach ($item->files() as $itemImage): ?>
                    <li><img class="item" src="<?= $itemImage->url() ?>" alt="<?= $itemImage->name() ?>"></li>
                  <?php endforeach ?>
                  </ul>
                </div>
                <div class="itemCaption">
                  <h3 class="itemTitle"><a href="mailto:mcleanshannon.g@gmail.com?subject=Offer for <?= $item->title()->html() ?>"><?= $item->title()->html() ?></a> - <small id="inlineCost"><?= $item->cost()->html() ?></small></h3>
                  <table>
                    <tr>
                      <th>Condition</th>
                      <th>Size</th>
                    </tr>
                    <tr>
                      <td><?= $item->condition()->html() ?></td>
                      <td><?= $item->size()->html() ?></td>
                    </tr>
                  </table>
                  <a class="itemButton" href="mailto:mcleanshannon.g@gmail.com?subject=Offer for <?= $item->title()->html() ?>">reply</a>
                </div>
              </div>
            <?php endif ?>
          <?php endforeach ?>
          </div>
      </main>
    <?php endif ?>
<?php snippet('footer') ?>
